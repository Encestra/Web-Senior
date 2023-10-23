document.getElementById('file').onchange=function(e){
    let reader=new FileReader();
    reader.readAsDataURL(e.target.files[0])
    reader.onload=function(){
        let preview = document.getElementById('preview');
        imagen = document.createElement('img');
        imagen.src=reader.result;
        imagen.style.width = "1750px"
        preview.append(imagen);
    }
}

document.getElementById('file').onchange = function(e) {
    let reader = new FileReader();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload = function() {
      let preview = document.getElementById('preview');
      let imagen = document.createElement('img');
      imagen.src = reader.result;
  
      let fotoDiv = document.querySelector('.preview');
      let fotoWidth = fotoDiv.offsetWidth;
  
      imagen.style.maxWidth = fotoWidth + 'px';
      imagen.style.height = 'auto';
      preview.innerHTML = '';
      preview.append(imagen);
    };
  };