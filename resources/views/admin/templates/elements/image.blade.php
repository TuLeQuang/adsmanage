<div id="image">
  <table>
    <tr>
      <td><label for="imageUrl">Image Url:</label></td>
      <td><input type="url" class="form-control" id="txtImageUrl" required></td>
    </tr>
     <tr>
      <td><label for="imagelink">Link:</label></td>
      <td><input type="url" class="form-control" id="txtImageLink" required></td>
    </tr>
    <tr>
      <td><label>Image Size:</label></td>
     {{-- <td colspan="3"><div id="imageSize" class="box" style="max-height: 600px;max-width: 300px;min-width: 50px;min-height: 50px">Kéo để chọn size</div></td>--}}
        <td colspan="4">
            <span>W: </span><input type="number" class="form-control" id="imageWidth" min="30" value="140" style="width: 70px;display: inline-block">
            <span> x H: </span><input type="number" id="imageHeight"  class="form-control" min="30" value="140" style="width: 70px;display: inline-block"> px</td>
    </tr>
  </table>
  <button class="btn btn-danger" id="btn-close-items" onclick="hideView('image')" style="margin: 15px 0px 0px 15px">Close</button>
</div>