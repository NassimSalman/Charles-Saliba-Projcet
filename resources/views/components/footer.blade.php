<div class="footer">

    <div class="stay-in-touch ">
        <div class="margin">
            <h1 class="titles margin"> {{ __('text.footer_title') }} </h1>
            <input id="messageInput" class="margin p-[10px]" type="text" placeholder="Enter your message">
            <a href="#" onclick="sendEmail()" class="hovered-button">{{ __('text.share_button') }}</a>
        </div>

    </div>

    <div class="contact-us ">

        <div class="contact-info margin">

            <div class="contact margin">
                <div class="contact-head">
                    <div class="border"></div>
                    <h1> {{ __('text.footer_contact') }} </h1>
                </div>
                <div class="email">
                    <a href="mailto:Info@charlessaliba.com">{{ __('text.email') }}</a>
                    <a href="tel:+9613475364">{{ __('text.phone_number') }}</a>
                </div>
            </div>

            <div class="explore">
                <div class="explore-head">
                    <div class="border"></div>
                    <h1> {{ __('text.footer_explore') }} </h1>
                </div>
                <div class="explore-items">
                    <a href="/books"> {{ __('text.books') }} </a>
                    <a href="/media"> {{ __('text.media') }} </a>
                    <a href="/contact-us"> {{ __('text.book_consultation') }} </a>
                </div>
            </div>
        </div>
        <div class="policy">

            <div class="copy-rights">
                {{ __('text.copy_rights') }}
            </div>

            <div class="terms-conditions">
                <a href="#"> {{ __('text.terms') }} </a>
                <a href="#"> {{ __('text.privacy') }} </a>
                <a href="#"> {{ __('text.cookies') }} </a>
            </div>
        </div>
    </div>
</div>

<script>
function sendEmail() {
    var message = document.getElementById("messageInput").value;
    var emailAddress = "Info@charlessaliba.com";
     

    var mailtoLink = "mailto:" + encodeURIComponent(emailAddress) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(message);

    window.location.href = mailtoLink;
}
</script>