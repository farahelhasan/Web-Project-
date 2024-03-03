function handleButtonClick() {
  var comment = document.getElementById("comment").value;
  var commentText = document.getElementById("commentText");
  <div class="comment-box">
    <div class="box-top">
      <div class="profile">
        <div class="profile-img">
          <img src="../images/farah.jpg" />
        </div>
        <div class="name-user">
          <strong>Farah ELhasan</strong>
          <span>@farahelhasan</span>
        </div>
      </div>
      <div class="reviews">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
    </div>
    <div class="client-comment">
      <p id="commentText"> </p>
    </div>
  </div>;
  commentText.textContent = comment;

  // Clear the textarea
  document.getElementById("comment").value = "";
}
