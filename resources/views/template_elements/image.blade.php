<div id="image" style="display: none;width: 100%">
  <table>
    <tr>
      <td><label for="imageUrl">Image Url:</label></td>
      <td><input type="url" class="item" id="txtImageUrl" required></td>
    </tr>
     <tr>
      <td><label for="imagelink">Link:</label></td>
      <td><input type="url" class="item" id="txtImageLink" required></td>
    </tr>
    <tr>
      <td><label>Image Size:</label></td>
      <td colspan="3"><div id="imageSize" class="box" style="max-height: 600px;max-width: 300px;">Kéo để chọn size</div></td>
    </tr>
  </table>
  <button class="btn btn-danger" id="btn-close-items" onclick="hideView('image')" style="margin: 15px 0px 0px 15px">Close</button>
</div>