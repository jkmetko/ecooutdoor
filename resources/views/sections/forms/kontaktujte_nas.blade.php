<section class="page-section page-section__dark" id="section-contacts">
    <div class="container">

        <div class="section-title-wrapper">
            <div class="section-title-inner">
                <h1 class="section-title">Kontaktujte Nás</h1>
                <span class="section-desc">Sme otvorení akejkoľvek komunikácii</span>
            </div>
        </div>

        <!-- Contact Form -->
        <form action="/php/contact-form.php" id="contact-form" class="contact-form">

            <div class="alert alert-success hidden" id="contact-alert-success">
                <strong>Success!</strong> Ďakujeme za Vašu správu. Čoskoro odpovieme.
            </div>
            <div class="alert alert-danger hidden" id="contact-alert-error">
                <strong>Error!</strong> Správu sa nepodarilo odoslať. Skuste to neskôr, prosím.
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!-- Field: Name -->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text"
                                   value=""
                                   data-msg-required="Please enter your name."
                                   class="form-control"
                                   name="name" id="name"
                                   placeholder="Vaše Meno">
                        </div>
                    </div>
                    <!-- Field: Name / End -->
                </div>
                <div class="col-md-4">
                    <!-- Field: Email -->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            <input type="email"
                                   value=""
                                   data-msg-required="Please enter your email address."
                                   data-msg-email="Please enter a valid email address."
                                   class="form-control"
                                   name="email"
                                   id="email"
                                   placeholder="Emailová Adresa">
                        </div>
                    </div>
                    <!-- Field: Email / End -->
                </div>
                <div class="col-md-4">
                    <!-- Field: Site -->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-desktop"></i></div>
                            <input type="url"
                                   class="form-control"
                                   name="url"
                                   id="url"
                                   placeholder="Vaša Webová Stránka">
                        </div>
                    </div>
                    <!-- Field: Site / End -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <!-- Field: Textarea / End -->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
										<textarea
                                                data-msg-required="Please enter your message."
                                                rows="8"
                                                class="form-control"
                                                name="message"
                                                id="message"
                                                placeholder="Vaša správa"></textarea>
                        </div>
                    </div>
                    <!-- Field: Textarea / End -->
                </div>
                <div class="col-md-4">
                    <p>Prosím, zadávajte informácie v správnom tvare, v časti vyhradenej pre Vašu otázku nešetrite textom.</p>

                    <strong>Odpovieme Vám v najkratšom možnom čase. Ďakujeme!</strong>

                    <hr class="hr__dashed">

                    <button class="btn btn-primary btn-has-icon btn-block" data-loading-text="Načítava sa...">
                        <i class="fa fa-envelope"></i>
                        odoslať správu
                    </button>
                </div>
            </div>
        </form>
        <!-- Contact Form / End -->

    </div>
</section>