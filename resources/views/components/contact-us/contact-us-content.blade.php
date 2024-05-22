<div class="contact-us margin">

    <div class="contact-us-header margin">
        <h1 class="titles"> {{ __('text.book_appointment_title') }} </h1>
    </div>

    <div class="book-appointment margin">

        <div class="contact-info">

            <a href="tel:+9611762762">
                <div class="box">

                    <div class="image">
                        <img src="{{ __('text.call_me_logo') }}">
                    </div>
                    <div class="info">
                        <h2> {{ __('text.call_me') }} </h2>
                        <p> {{ __('text.number') }} </p>
                    </div>
                </div>
            </a>
            <a href="mailto:Info@charlessaliba.com">

                <div class="box">

                    <div class="image">
                        <img src="{{ __('text.email_me_logo') }}">
                    </div>

                    <div class="info">
                        <h2> {{ __('text.email_me') }} </h2>
                        <p> {{ __('text.email') }} </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="name">
            <div class="fist-name">
                <h5> {{ __('text.first_name') }} </h5>
                <input type="text" placeholder="First Name">
            </div>
            <div class="last-name">
                <h5> {{ __('text.last_name') }} </h5>
                <input type="text" placeholder="Last Name">
            </div>
        </div>

        <div class="contact">
            <div class="email">
                <h5> {{ __('text.email_address') }} </h5>
                <input type="text" placeholder="Email Address">
            </div>
            <div class="number">
                <h5> {{ __('text.phone') }} </h5>
                <input type="tel" id="phone" name="phone">
            </div>
        </div>

        <div class="subject">
            <h5> {{ __('text.subject') }} </h5>
            <input type="text" placeholder="Subject">
        </div>

        <div class="message">
            <h5> {{ __('text.message') }} </h5>
            <textarea id="myTextarea" name="myTextarea" placeholder="Enter your message here"></textarea>
        </div>

        <div class="submit">
            <a href="#" class="hovered-button"> {{ __('text.submit_button') }} </a>
        </div>
    </div>
</div>