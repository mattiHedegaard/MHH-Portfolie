const DESIGN_WIDTH = 1920;

function applyZoom() {
    const z = document.documentElement.clientWidth / 1920;
    document.documentElement.style.setProperty('--zoom', z);
    document.body.style.zoom = z;
}

applyZoom();
window.addEventListener('resize', applyZoom);