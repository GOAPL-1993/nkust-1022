<!DOCTYPE html>
<html>

<body>

  <form action="/upload/" method="post" enctype="multipart/form-data">
    @csrf
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
  </form>
  <hr>
  @foreach ($images as $image)
    <img src = "/storage/{{$image->filename}}" width=50><br>
  @endforeach

  
</body>

</html>