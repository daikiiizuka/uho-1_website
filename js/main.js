$(window).scroll(function () {
    var now = $(window).scrollTop();
    if (now > 200) {
      $('.pagetop').fadeIn("slow");
    } else {
      $('.pagetop').fadeOut('slow');
    }
  });

  $(window).scroll(function () {
    var now = $(window).scrollTop();
    if (now > 200) {
      $('.pagetop-gorilla').fadeIn("slow");
    } else {
      $('.pagetop-gorilla').fadeOut('slow');
    }
  });

  $(function(){
  $('.toggle_btn').on('click', function() {
    if ($('#header').hasClass('open')) {
      $('#header').removeClass('open');
    } else {
      $('#header').addClass('open');
    }
  });

  // #maskのエリアをクリックした時にメニューを閉じる
  $('#mask').on('click', function() {
    $('#header').removeClass('open');
  });

  // リンクをクリックした時にメニューを閉じる
  $('#navi a').on('click', function() {
    $('#header').removeClass('open');
  });
});

$(function(){
  $('.gorilla-toggle_btn').on('click', function() {
    if ($('#gorilla-header').hasClass('open')) {
      $('#gorilla-header').removeClass('open');
    } else {
      $('#gorilla-header').addClass('open');
    }
  });

  // #maskのエリアをクリックした時にメニューを閉じる
  $('#gorilla-mask').on('click', function() {
    $('#gorilla-header').removeClass('open');
  });

  // リンクをクリックした時にメニューを閉じる
  $('#gorilla-navi a').on('click', function() {
    $('#gorilla-header').removeClass('open');
  });
});

$(function(){
  $('.pippo-toggle_btn').on('click', function() {
    if ($('#pippo-header').hasClass('open')) {
      $('#pippo-header').removeClass('open');
    } else {
      $('#pippo-header').addClass('open');
    }
  });

  // #maskのエリアをクリックした時にメニューを閉じる
  $('#pippo-mask').on('click', function() {
    $('#pippo-header').removeClass('open');
  });

  // リンクをクリックした時にメニューを閉じる
  $('#pippo-navi a').on('click', function() {
    $('#pippo-header').removeClass('open');
  });
});

$(function(){
  $('.uho-me-toggle_btn').on('click', function() {
    if ($('#uho-me-header').hasClass('open')) {
      $('#uho-me-header').removeClass('open');
    } else {
      $('#uho-me-header').addClass('open');
    }
  });

  // #maskのエリアをクリックした時にメニューを閉じる
  $('#uho-me-mask').on('click', function() {
    $('#uho-me-header').removeClass('open');
  });

  // リンクをクリックした時にメニューを閉じる
  $('#uho-me-navi a').on('click', function() {
    $('#uho-me-header').removeClass('open');
  });
});

$(function(){
  // アコーディオンメニューのラベルがクリックされた場合
  $("#ac-menu .label").on("click", function() {
    // labelクラスの次の要素（detailクラス）の表示・非表示を切り替える
    $(this).next().slideToggle();
    // labelクラスにopenクラスを追加したり削除したりする
    // openクラスの追加、削除を行うことでラベルの「－」と「＋」の切り替えを行う
    $(this).toggleClass("open");
  });
});

$(function(){
  // アコーディオンメニューのラベルがクリックされた場合
  $("#pippo-ac-menu .label").on("click", function() {
    // labelクラスの次の要素（detailクラス）の表示・非表示を切り替える
    $(this).next().slideToggle();
    // labelクラスにopenクラスを追加したり削除したりする
    // openクラスの追加、削除を行うことでラベルの「－」と「＋」の切り替えを行う
    $(this).toggleClass("open");
  });
});