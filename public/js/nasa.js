//Nasa app
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("fetchNasaData").addEventListener("click", getNasaData);
});

async function getNasaData() {
    try {
        const response = await fetch("https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY");
        const data = await response.json();

        if (data) {
            const tituloTraducido = await traducirTexto(data.title);
            const explicacionTraducida = await traducirTextoLargo(data.explanation);

            document.getElementById("nasaContent").innerHTML = `
                <div style="background: #f4f4f4; padding: 15px; border-radius: 10px;">
                    <h2 style="color: #d9534f;">${tituloTraducido}</h2>
                    <p style="font-size: 18px; line-height: 1.6;">${formatearTexto(explicacionTraducida)}</p>
                    <img src="${data.url}" alt="NASA Image of the Day" width="500" style="display: block; margin: 10px auto; border-radius: 10px;">
                </div>
            `;
        }
    } catch (error) {
        console.error("Error al obtener los datos de la NASA:", error);
    }
}

async function traducirTexto(texto) {
    try {
        const response = await fetch(`https://api.mymemory.translated.net/get?q=${encodeURIComponent(texto)}&langpair=en|es`);
        const data = await response.json();
        return data.responseData.translatedText || texto;
    } catch (error) {
        console.error("Error al traducir el texto:", error);
        return texto;
    }
}

async function traducirTextoLargo(texto) {
    const partes = [];
    for (let i = 0; i < texto.length; i += 500) {
        partes.push(texto.substring(i, i + 500));
    }

    const traducciones = await Promise.all(partes.map(parte => traducirTexto(parte)));
    return traducciones.join(" ");
}

// Función para mejorar el formato del texto
function formatearTexto(texto) {
    return texto.replace(/\.\s+/g, ".<br><br>");
}
