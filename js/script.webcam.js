function configure() {
  Webcam.set({
    width: 480,
    height: 360,
    image_format: 'jpeg',
    jpeg_quality: 90
  });

  Webcam.attach('#my_camera');
}

function saveSnap() {

  Webcam.snap(function (data_uri) {
    document.getElementById('results').innerHTML =
      '<img id = "webcam" src = "' + data_uri + '"/>';
  });

  Webcam.reset();

  var base64image = document.getElementById("webcam").src;
  Webcam.upload(base64image, 'function.php', function (code, text) {
    alert('Berhasil Mengambil Gambar');
    document.location.href = "image.php"
  });
}