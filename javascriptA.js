// TheQuickBrownFoxJumpsOverTheLazyDog.

var letters = "TheQuickBrownFoxJumpsOverTheLazyDog.";
letters = letters.replace(/([A-Z])/g, ' $1').trim()
var res = letters.toLowerCase();

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}
  
document.write(capitalizeFirstLetter(res));