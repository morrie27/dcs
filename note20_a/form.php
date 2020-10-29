<form enctype="multipart/form-data" id="form" name="form" method="post" onsubmit="return form_Check();">
<input type="hidden" name="mode" value="send">
<input type="hidden" name="wr_subject" value="상담신청">
<input type="hidden" name="wr_4" value="<?=$_SERVER["HTTP_HOST"]?>/<?=$_GET["utm_source"]?>/<?=$_SERVER["REMOTE_ADDR"]?>">

<div id="mct_07">
    <div class="type1">
        <div class="title">
            <h1>최저가 상담받기</h1>
            <h1>정확한 상담을 위해 아래의 정보를 입력해 주세요.</h1>
        </div>
        <div class="box">
            <div class="ref">
                <ul>
                    <li><p>희망기종</p></li>
                    <li>
                        <select class="select" id="wr_3" name="wr_3" required>
                            <option value="">희망기종을 선택해 주세요</option>
                            <option value="노트20">노트20</option>
                            <option value="노트20 울트라">노트20 울트라</option>
                        </select>
                    </li>
                </ul>
            </div>
            <div class="ref">
                <ul>
                    <li><p>통신사</p></li>
                    <li>
                        <select class="select" id="wr_2" name="wr_2" required>
                            <option value="">통신사를 선택해 주세요</option>
                            <option value="SKT">SKT</option>
                            <option value="KT">KT</option>
                            <option value="LG U+">LG U+</option>
                        </select>
                    </li>
                </ul>
            </div>
            <div class="ref">
                <ul>
                    <li><p>이름</p></li>
                    <li><input type="text" id="wr_name" name="wr_name" class="full_ip" placeholder="이름을 입력해 주세요"
                               required></li>
                </ul>
            </div>
            <div class="ref">
                <ul>
                    <li><p>연락처</p></li>
                    <li><input type="text" id="wr_1" name="wr_1" class="full_ip" maxlength="13"
                               placeholder="연락처를 입력해 주세요" required></li>
                </ul>
            </div>
            <div class="ref">
                <p class="color_01">※ 미성년자 참여 불가능한 이벤트입니다.</p>
                <p class="color_01">※ 타인의 정보를 도용 시 개인정보보호법에 의거 불이익을 받을 수 있습니다.</p>
            </div>
        </div>
    </div>


    <div class="type2">
        <div class="agree_ment">
            <input type="checkbox" id="agree" class="chk" checked> <span>개인정보 수집 및 이용에 동의합니다 (필수)</span>
            <div class="modalOpen">
                <button type="button" id="modalBtn">개인정보취급방침</button>
            </div>
        </div>

        <div id="modal">
            <div class="modalContent">
                <span class="modalName">개인정보 수집 및 이용 동의</span><span class="close">&times;</span>
                <div class="txtarea">
				<textarea id="wrtextarea" name="wrtextarea">
본인은 제이컴퍼니(이하 '회사'라 합니다)는 제이컴퍼니 에서 제공하는 상담서비스(이하 '서비스'라 합니다)를 이용하기 위해, 다음과 같이 '회사'가 본인의 개인정보를 수집/이용하는 것에 동의합니다.

1. 수집항목
- 이용자의 이름, 전화번호, 단말기/상품 종류
- 이용자의 상담내용

2. 이용목적
- 이동통신 서비스 , 이동전화 단말기 및 홈&미디어 상품 등 에 대한 개인맞춤형 상담
- 카카오톡 상담을 위한 문자발송 및 안내
- 이동통신 서비스 가입, 이동전화 단말기 구매 및 홈&미디어 상품 가입을 위한 Inbound 상담

3. 개인정보의 보유기간 및 이용기간
- 이용자가 '서비스'를 이용하는 기간에 한하여 보유 및 이용
- 법령에서 정하는 경우 해당 기간까지 보유

※ 본 동의는 서비스의 본질적 기능 제공을 위한 개인정보 수집/이용에 대한 동의로서, 동의하지 않으실 경우 서비스 제공이 불가능합니다.
※ 법령에 따른 개인정보의 수집/이용, 계약의 이행/편의증진을 위한 개인정보 처리위탁 및 개인정보 처리와 관련된 일반사항은 '회사'의 개인정보 처리방침에 따릅니다.

위 내용을 숙지하였으며, 이에 동의합니다.
				</textarea>
                </div>
            </div>
        </div>

        <div class="btns">
            <button class="btn_03">신청하기</button>
        </div>
    </div>
</div>
</form>

<!-- 모달창 -->
<script>
    let modal = document.getElementById('modal');
    let btn = document.getElementById('modalBtn');
    let close = document.getElementsByClassName('close')[0];

    btn.onclick = function () {
        modal.style.display = "block";
    }

    close.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<!-- input에 하이픈 자동입력 -->
<script>
    var autoHypenPhone = function(str){
        str = str.replace(/[^0-9]/g, '');
        var tmp = '';
        if( str.length < 4){
            return str;
        }else if(str.length < 7){
            tmp += str.substr(0, 3);
            tmp += '-';
            tmp += str.substr(3);
            return tmp;
        }else if(str.length < 11){
            tmp += str.substr(0, 3);
            tmp += '-';
            tmp += str.substr(3, 3);
            tmp += '-';
            tmp += str.substr(6);
            return tmp;
        }else{
            tmp += str.substr(0, 3);
            tmp += '-';
            tmp += str.substr(3, 4);
            tmp += '-';
            tmp += str.substr(7);
            return tmp;
        }

        return str;
    }

    var wr_1 = document.getElementById('wr_1');

    wr_1.onkeyup = function(){
        console.log(this.value);
        this.value = autoHypenPhone( this.value ) ;
    }
</script>

<!-- form_check -->
<script>
function form_Check(){
	if(form.wr_name.value == ''){
		alert("이름을 입력해주세요");
		form.wr_name.focus();
		return false;
	}

	if(form.wr_1.value ==''){
	    alert("연락처를 입력해주세요");
	    form.wr_1.focus();
	    return false;
    }

	if(form.wr_2.value ==''){
	    alert("현재통신사를 선택해주세요");
	    form.wr_2.focus();
	    return false;
    }

	if(form.wr_3.value ==''){
	    alert("희망기종을 선택해주세요");
	    form.wr_3.focus();
	    return false;
    }

	if(form.agree.checked== false){
	    alert('개인정보활용에 동의하셔야 합니다.');
		form.agree.focus();
		return false;
	}
	// if(!confirm('상담신청 하시겠습니까?')) {
	// 	return false;
	// }
	else {

        $.ajax({
            url: '/glxnt20/form_send.php',
            type: 'POST',
            data: $('#form').serialize(),
            success: function (data) {
                alert("상담신청 되셨습니다. 24시간 안에 해피콜 드리겠습니다.");
            }
        });

        _tfa.push({notify: 'event', name: 'lead', id: 1330802});
		form.submit();
	}
};
</script>