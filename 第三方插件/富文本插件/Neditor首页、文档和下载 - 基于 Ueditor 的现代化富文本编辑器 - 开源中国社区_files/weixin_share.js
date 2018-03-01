var weixinShare = {
    init: function() {
        var wxAppId = page.weixinAppid,
            wxTimesTamp = page.weixinTimestamp,
            wxNonceStr = page.weixinNonceStr,
            wxSignature = page.weixinSignature,
            shareLink = page.weixinUrl,
            ShareTitle = page.weixinShareTitle,
            ShareDescription = page.weixinShareDescription,
            ShareImgUrl = page.weixinShareImgUrl;
        wx.config({
            debug: false,
            appId: wxAppId,
            timestamp: wxTimesTamp,
            nonceStr: wxNonceStr,
            signature: wxSignature,
            jsApiList: [
                'onMenuShareTimeline',
                'onMenuShareAppMessage'
            ]
        });
        wx.ready(function () {
            wx.onMenuShareTimeline({
                title: ShareTitle,
                link: shareLink,
                imgUrl: ShareImgUrl
            });
            wx.onMenuShareAppMessage({
                title: ShareTitle,
                link: shareLink,
                desc: ShareDescription,
                imgUrl: ShareImgUrl
            });
            wx.onMenuShareQQ({
                title: ShareTitle,
                desc: ShareDescription,
                link: shareLink,
                imgUrl: ShareImgUrl
            });
            wx.onMenuShareWeibo({
                title: ShareTitle,
                desc: ShareDescription,
                link: shareLink,
                imgUrl: ShareImgUrl
            });
            wx.onMenuShareQZone({
                title: ShareTitle,
                desc: ShareDescription,
                link: shareLink,
                imgUrl: ShareImgUrl
            });
        });
    }
};