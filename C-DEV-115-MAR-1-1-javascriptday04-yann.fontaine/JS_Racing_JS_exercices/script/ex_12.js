(function(){
    window.onload=function(){
let element = document.getElementsByTagName('div');
console.log(element);
element[2].innerHTML = '<img src=""/>';
fetch('https://www.coding-academy.fr/wp-content/uploads/2017/10/CODING_LOGO_CMJN.png', {integrity: `crypto.subtle.digest('SHA-256', "ex12_img")`})
.then(function(response) {
  return response.blob();
})
.then(function(myBlob) {
  const objectURL = URL.createObjectURL(myBlob);
  bannerImg = getElementsByTagName('img')[0];
  myImage.src = objectURL;
});
}
})();