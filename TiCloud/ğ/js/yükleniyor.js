function yukleniyor(e) {
    var div = document.createElement('div');
    var img = document.createElement('img');
    img.src = 'js/loading.gif';
    div.innerHTML = "Yükleniyor...<br />";
    div.style.cssText = 'position: center;';
    div.appendChild(img);
    document.body.appendChild(div);
    return true;
    }
