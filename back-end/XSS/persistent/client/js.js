const template = data => {
  return `
    <div class="message-item">
      <i>IP: ${data.ip} 说道: </i>
      <sapn class="content">${data.content}</sapn>
    </div>`;
};

// 获取内容
const getContent = () => {
  $.ajax({
    url: 'http://127.0.0.1:8084/getContent.php',
    method: 'GET',
    async: true
  })
  .done(data => {
    data = JSON.parse(data);
    // 清空内容
    $('.message-item').remove();

    // 插入数据
    for (let i = 0; i < data.length; i++) {
      $('.message-board').append(template(data[i]));
    }
  })
};

// 点击 提交留言
$('#submit').click(() => {
  const content = $('textarea').val();
  if (content === '') {
    return;
  }

  $.ajax({
    url: 'http://127.0.0.1:8084/postContent.php',
    method: 'POST',
    async: true,
    data: {
      content
    }
  })
  .done(() => {
    getContent();
  })
});

$(document).ready(() => {
  getContent();
});