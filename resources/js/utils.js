(function () {
    'use strict';

    const exports = module.exports = {};

    // Custom export functions
    exports.base_url = function() {
        return window.location.hostname;
    };

    exports.isNotEmpty = function(val) {
        if (val == null)
            return false;
        if ($.trim(val) == "")
            return false;
        return true
    };

    exports.isOnlyNumber = function(val) {
        return /^\d+$/.test(val);
    };

    exports.inputKeyPressHandler_AllowNumberOnly = function(e) {
        let code = (e.which) ? e.which : e.keyCode;
        if (code > 31 && (code < 48 || code > 57)) {
            return false;
        }
        return true;
    };

    exports.inputKeyUpHandler_DisallowHandle = function() {
        this.value = this.value.replace(/[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/g, '');
    };

    exports.setInput_AllowNumberOnly = function(selector) {
        $(selector).keypress(exports.inputKeyPressHandler_AllowNumberOnly);
        $(selector).keyup(exports.inputKeyUpHandler_DisallowHandle);
    };

    exports.checkDateValid = function(obj) {
        if( !/^\d{8}$/.test($(obj.id).val()) ) {
            alert(obj.errMsg);
            return false;
        }
        let today = new Date().truncTime();
        let targetDay = $(obj.id).datepicker('getDate').truncTime();
        if( targetDay < today ) {
            alert(obj.errMsg);
            return false;
        }
        return true;
    };

    exports.checkTimeValid = function(obj) {
        if( !/^\d{2}$/.test($(obj.id).val()) ) {
            alert(obj.errMsg);
            return false;
        }
        return true;
    };

    exports.checkBirthValid = function(obj) {
        let inputValue = $(obj.id).val();
        if( !/^\d{8}$/.test(inputValue) ) {
            alert(obj.errMsg.invalidFormat);
            $(obj.id).focus();
            return false;
        }
        let targetBirth = new Date( inputValue.substr(0, 4), inputValue.substr(4, 2), inputValue.substr(6, 2) ).addMonths(-1).truncTime();
        if( obj.check19 ) {
            let age19 = new Date().addYears(-19).truncTime();
            if( age19 < targetBirth ) {
                alert(obj.errMsg.check19);
                $(obj.id).focus();
                return false;
            }
        }
        let age80 = new Date().addYears(-80).truncTime();
        if( !(age80 < targetBirth) ) {
            alert(obj.errMsg.check80);
            $(obj.id).focus();
            return false;
        }
        let age01 = new Date().addYears(-1).truncTime();
        if( age01 < targetBirth ) {
            alert(obj.errMsg.check01);
            $(obj.id).focus();
            return false;
        }
        return true;
    };

    exports.numberFormat = function (x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    };

    exports.checkAlphaNumeric = function (id) {
        return /^[a-zA-Z0-9]+$/.test($.trim($(id).val()));
    };

    exports.checkNameKor = function (id) {
        return /^[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]+$/.test($.trim($(id).val()));
    };

    exports.checkNameEng = function (id) {
        return /^[a-zA-Z]+[a-zA-Z ]*[a-zA-Z]+$/.test($.trim($(id).val()));
    };

    exports.checkNameKorEng = function (id) {
        return /^[가-힝a-zA-Z]+[가-힝a-zA-Z\s,]*[가-힝a-zA-Z]+$/.test($.trim($(id).val()));
    };

    exports.checkRegNoHead = function (id) {
        return /^[0-9]{6}$/.test($(id).val());
    };

    exports.checkRegNoBody = function (id) {
        return /^[0-9]{7}$/.test($(id).val());
    };

    exports.checkRegNoBodyGender = function (id) {
        return /^[0-9]{1}$/.test($(id).val());
    };

    exports.checkCellPhone = function (id) {
        //return /^[0-9]{10,11}$/.test($(id).val());

        let val = $(id).val();
        let koreaPhoneNumberRegExp = /^(01[016789])(\d{3,4})(\d{4})$/;
        let meaninglessMobilePhoneNumbers = ["01000000000", "0100000000"];
        let countryCallingCode = "82";

        this.isNotEmpty( val );
        if (countryCallingCode == "82") {
            for (let i = 0; i < meaninglessMobilePhoneNumbers.length; i++)
                if (val == meaninglessMobilePhoneNumbers[i])
                    return false;
            return koreaPhoneNumberRegExp.test(val);
        }

        return this.isOnlyNumber(val);
    };

    exports.checkEmailId = function (id) {
        return /^[-A-Za-z0-9_]+[-A-Za-z0-9_.]*$/.test($.trim($(id).val()));
    };

    exports.checkEmailDomain = function (id) {
        return /^[-A-Za-z0-9_.]*[.]{1}[A-Za-z]{1,5}$/.test($.trim($(id).val()));
    };

    exports.checkFullEmailId = function (id) {
        return /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($(id).val());
    };

    exports.getDoBFromJuminNumber = function (socialRegNumber) {
        let jumin1 = socialRegNumber.substr(0,6)
            , jumin2 = socialRegNumber.substr(6,7)
            , genda  = jumin2.substr(0,1)
            , formalYear = (genda < 3) ? '19' : '20'
            , yyyy     = formalYear + jumin1.substr(0,2)
            , MM     = jumin1.substr(2,2)
            , dd     = jumin1.substr(4,2);

        return yyyy + '.' + MM + '.' + dd;
    };

    exports.getGenderFromJuminNumber = function (socialRegNumber) {
        if($.trim(socialRegNumber) == '') return '';

        let gender = socialRegNumber.substr(6,1);
        return (gender == 1 || gender == 3) ? '1' : '2';
    };

    exports.checkJuminNumber = function (aNum1, aNum2) {
        let tot=0, result=0, re=0, se_arg=0;
        let chk_num="";
        let aNum = aNum1 + aNum2;

        if (aNum.length != 13) {
            return false;
        }
        else {
            for (let i=0; i <12; i++) {
                if (isNaN(aNum.substr(i, 1)))
                    return false;
                se_arg = i;

                if (i >= 8)
                    se_arg = i - 8;
                tot = tot + Number(aNum.substr(i, 1)) * (se_arg + 2)
            }

            if (chk_num != "err") {
                re = tot % 11;
                result = 11 - re;
                if (result >= 10) result = result - 10;
                if (result != Number(aNum.substr(12, 1))) return false;
                if ((Number(aNum.substr(6, 1)) < 1) || (Number(aNum.substr(6, 1)) > 4)) return false;
            }
        }
        return true;
    };

    exports.setCookie = function (name, value, expiredays) {
        let today = new Date();
        today.setDate(today.getDate() + expiredays);
        document.cookie = name + '=' + escape(value) + '; path=/; expires=' + today.toGMTString() + ';'
    };

    exports.getCookie = function (name) {
        let cName = name + "=";
        let x = 0;
        let i = 0;
        while (i <= document.cookie.length) {
            let y = (x + cName.length);
            if (document.cookie.substring(x, y) == cName) {
                let endOfCookie;
                if ((endOfCookie = document.cookie.indexOf(";", y)) == -1)
                    endOfCookie = document.cookie.length;
                return unescape(document.cookie.substring(y, endOfCookie));
            }
            x = document.cookie.indexOf(" ", x) + 1;
            if (x == 0)
                break;
        }
        return "";
    };

    exports.getRoomAndPackages = function (res) {

        let roomtypes = []; // 객실 Tab 데이터 구조 담는 배열 변수
        let promotions = res.data.promotions || [];  // 패키지 탭 프로모션 데이터
        let packages = res.data.packages || [];

        let roomInfoList = res.data.roomtypeInfos || [];
        let roomOnlyList = res.data.roomtypes || [];
        let promotionList = promotions;
        let packageList = packages;

        // 객실탭 구조 만들기
        for (let i = 0; i < roomInfoList.length; i++) { // 객실수 만큼
            roomtypes.push(roomInfoList[i]);

            let items = [];
            for (let j = 0; j < roomOnlyList.length; j++) { // RoomOnly -> Items에 추가
                if (roomtypes[i].id == roomOnlyList[j].id) {
                    roomOnlyList[j].itemType = "RM";
                    roomOnlyList[j].title = roomtypes[i].title;
                    roomOnlyList[j].bedOpt = roomtypes[i].bedOpt;
                    roomOnlyList[j].info = roomtypes[i].info;
                    roomOnlyList[j].cancelPolicy = roomtypes[i].cancelPolicy;
                    roomOnlyList[j].photo = roomtypes[i].photo;
                    roomOnlyList[j].photos = roomtypes[i].photos;
                    roomOnlyList[j].amenity = roomtypes[i].amenity;
                    roomOnlyList[j].standardAdults = roomtypes[i].standardAdults;
                    roomOnlyList[j].standardChildren = roomtypes[i].standardChildren;
                    roomOnlyList[j].maxAdults = roomtypes[i].maxAdults;
                    roomOnlyList[j].maxChildren = roomtypes[i].maxChildren;
                    roomOnlyList[j].nights = roomtypes[i].nights;
                    items.push(roomOnlyList[j]);
                }
            }

            for (let j = 0; j < promotionList.length; j++) { // Promotion -> Items에 추가
                for (let k = 0; k < promotionList[j].rates.length; k++) {
                    if (roomtypes[i].id == promotionList[j].rates[k].roomtypeId) {
                        let cancelPolicy = promotionList[j].cancelPolicy;
                        promotionList[j].rates[k].cancelPolicy = cancelPolicy;
                        items.push({
                            itemType: "PM",
                            id: promotionList[j].id,
                            standardAdults: roomtypes[i].standardAdults,
                            standardChildren: roomtypes[i].standardChildren,
                            maxAdults: roomtypes[i].maxAdults,
                            maxChildren: roomtypes[i].maxChildren,
                            nights: promotionList[j].nights,
                            photo: promotionList[j].photo,
                            photos: promotionList[j].photos,
                            title: promotionList[j].title,
                            info: promotionList[j].info,
                            cancelPolicy: cancelPolicy,
                            price: promotionList[j].rates[k].price,
                            priceOrg: promotionList[j].rates[k].priceOrg,
                            rate: promotionList[j].rates[k], // item 안에 프로모션 rate object
                            dc: promotionList[j].rates[k].dc
                        });
                    }
                }
            }

            for (let j = 0; j < packageList.length; j++) { // Package -> Items에 추가
                for (let k = 0; k < packageList[j].rates.length; k++) {
                    if (roomtypes[i].id == packageList[j].rates[k].roomtypeId) {
                        let cancelPolicy = packageList[j].cancelPolicy;
                        packageList[j].rates[k].cancelPolicy = cancelPolicy;
                        items.push({
                            itemType: "PKG",
                            id: packageList[j].id,
                            standardAdults: roomtypes[i].standardAdults,
                            standardChildren: roomtypes[i].standardChildren,
                            maxAdults: roomtypes[i].maxAdults,
                            maxChildren: roomtypes[i].maxChildren,
                            nights: packageList[j].nights,
                            photo: packageList[j].photo,
                            photos: packageList[j].photos,
                            title: packageList[j].title,
                            summary: packageList[j].summary,
                            info: packageList[j].info,
                            cancelPolicy: cancelPolicy,
                            price: packageList[j].rates[k].price,
                            priceOrg: packageList[j].rates[k].priceOrg,
                            rate: packageList[j].rates[k], // item 안에 프로모션 rate object
                            dc: packageList[j].rates[k].dc
                        });
                    }
                }
            }

            if (items.length != 0) {
                items.sort(function (a, b) { // 최저가 순으로 정렬 오름차순 정렬
                    return a["price"] - b["price"]; // 필드명
                });
            }
            roomtypes[i].items = items;

            if (roomtypes[i].items.length != 0) { // 객실 최상단 정보 세팅
                roomtypes[i].price = roomtypes[i].items[0].price;
                roomtypes[i].dc = roomtypes[i].items[0].dc;
            } else { // 가격이 0이면 해당 객실정보는 보여지지않음
                roomtypes[i].price = 0;
            }
        }

        // 패키지탭 프로모션 최저가 순으로 정렬
        for (let i = 0; i < promotionList.length; i++) {
            if (promotionList[i].rates.length != 0) {
                promotionList[i].rates.sort(function (a, b) {
                    return a["price"] - b["price"];
                });
            }
        }

        // 패키지탭 패키지 최저가 순으로 정렬
        for (let i = 0; i < packageList.length; i++) {
            if (packageList[i].rates.length != 0) {
                packageList[i].rates.sort(function (a, b) {
                    return a["price"] - b["price"];
                });
            }
        }

        return [roomtypes, promotions, packages];
    };

})();
