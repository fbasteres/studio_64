<div class="nav-bottom">
    <div class="popup-whatsapp fadeIn">
        <div class="content-whatsapp -top">
            <button type="button" class="closePopup">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x" style="color:aliceblue;"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
            </button>
            <p>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" /><path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" /></svg>
                &nbsp; Hola, ¿en que podemos ayudarle? </p>

        </div>
        <div class="content-whatsapp -bottom">
            <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />
            
            <button class="send-msPopup" id="send-btn" type="button">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-send"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14l11 -11" /><path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
            </button>

        </div>
    </div>
    <button type="button" id="whats-openPopup" class="whatsapp-button">
        <div class="float">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon-whatsapp">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                <path
                    d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
            </svg>
            </div>
            
        </div>
    </button>
    <div class="circle-anime"></div>

    <script>
        popupWhatsApp = () => {
    let btnClosePopup = document.querySelector('.closePopup');
    let btnOpenPopup = document.querySelector('.whatsapp-button');
    let popup = document.querySelector('.popup-whatsapp');
    let sendBtn = document.getElementById('send-btn');
    let inputMsg = document.getElementById('whats-in');
    let timeoutId;

    const togglePopup = () => {
        popup.classList.toggle('is-active-whatsapp-popup');
        popup.style.animation = "fadeIn .6s 0.0s both";
        resetAutoClose();
    };

    const closePopup = () => {
        popup.classList.remove('is-active-whatsapp-popup');
    };

    const resetAutoClose = () => {
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => {
            if (!document.activeElement || document.activeElement !== inputMsg) {
                closePopup();
            }
        }, 3000);
    };

    btnClosePopup.addEventListener("click", closePopup);
    btnOpenPopup.addEventListener("click", togglePopup);
    document.addEventListener("click", (event) => {
        if (!popup.contains(event.target) && !btnOpenPopup.contains(event.target)) {
            closePopup();
        }
    });

    sendBtn.addEventListener("click", () => {
        let msg = inputMsg.value.trim().replace(/ /g, "%20");
        if (msg) {
            window.open('https://wa.me/51931140589?text=' + msg, '_blank');
        }
    });

    inputMsg.addEventListener("input", resetAutoClose);

    togglePopup(); // Se abre el popup inicialmente
};

popupWhatsApp();

    </script>
</div>
