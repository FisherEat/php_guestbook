/**
 * guest.js
 * 留言本js
 * @date    2016-12-22 17:06:26
 */

$(function(){

	// 检查表单是否有填入数据： 标题和内容
	$('[name=guest-form]').submit( function(){
		var title = $('[name=title]').val();
		var content = $('[name=content]').val();
		if( !title ){
			return showTips('标题不能为空');
		}else if( !content ){
			return showTips('内容不能为空');
		}

	} );


	// 消息提示框
	function showTips(message){
		$('.tips-box h3').text(message);
		$('.tips-box').stop().slideDown(400,function(){
			setTimeout( hideTips ,1500 );
		});
		return false;
	}
	function hideTips() {
		$('.tips-box').slideUp(400,function(){
			$('.tips-box h3').text('');
		});
	}


	// 删除
	$('.del-link').click( function (){
		return confirm( '确定要删除该留言么？' );
	} );

})