// 根据url动态拼接url
function seeCode() {
  const url = document.getElementsByTagName('input')[0].value;
  location.href = location.origin + location.pathname + '?url=' + url
}