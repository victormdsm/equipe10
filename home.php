<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="views/css/home-style.css">
    <link rel="stylesheet" href="views/css/contact-form.css">
    <link rel="stylesheet" href="views/css/modal.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
    <?php include 'navbar-layout.html' ?>
    <section>
        <div class="background-image"></div>
        <div class="title-container">
            <div class="title">O Seu Sucesso Financeiro, a Nossa Expertise Contábil.</div>
        </div>
        <span class="subtitle"> Solução Contábel Inteligente para Impulsionar Seu Negócio</span>
    </section>
    <div class="content">
        <section class="row vantagens">
            <strong class="title-slogan">
                <p>-ENTENDA COMO FUNCIONA</p>
                <span class="main-title">
                    nosso sistema!
                </span>
            </strong>
            <div class="col-12 col-md-3 vantagem" data-aos="fade-right">
                <img src="assets/icons8-gráfico-combinado.gif" alt="Ícone 1">
                <h3>Controle Simplificado</h3>
                <p>Nosso sistema oferece uma visão clara e concisa de finanças, permitindo que você gerencie eficientemente a contabilidade de empresas</p>
            </div>
            <div class="col-12 col-md-3 vantagem" data-aos="fade-up">
                <img src="assets/icons8-documento.gif" alt="Ícone 2">
                <h3>Relatórios Personalizados</h3>
                <p>Gere relatórios que atendem às necessidades específicas de negócios. Tenha sempre em mãos os dados que você precisa.</p>
            </div>
            <div class="col-12 col-md-3 vantagem" data-aos="fade-left">
                <img src="assets/icons8-suporte-on-line.gif" alt="Ícone 3">
                <h3>Suporte Contínuo</h3>
                <p>Nossa equipe de suporte está sempre pronta para ajudá-lo. Seja uma dúvida simples ou uma questão complexa, estamos aqui para você.</p>
            </div>
        </section>
        <section class="row points">
            <strong class="slogan-points">
                <p>-VOCÊ SE IDENTIFICA COM</p>
                <span class="main-title">
                    algum desses pontos?
                </span>
            </strong>
            <section>
                <div class="container col-8">
                    <div class="row" data-aos="zoom-in-up">
                        <div class="col-6 col-sm-6 col-md-4 p-0">
                            <div class="cedula-azul" style="background-color: #5E6F7C;">
                                <span class="m-0">
                                    Dificuldades ao gerenciar empresas
                                </span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 p-0 mb-5">
                            <div class="cedula-cinza" style="background-color: #08243B;">
                                <span class="m-0">
                                    Dificuldade em gerar relatórios
                                </span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 p-0 mb-5">
                            <div class="cedula-azul" style="background-color: #5E6F7C;">
                                <span class="">
                                    Manter a conformidade fiscal
                                </span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 p-0 mb-5" style="background-color: #08243B;">
                            <div class="cedula-cinza">
                                <span class="">
                                    Ausência de controle dos dados empresariais
                                </span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 p-0 mb-5">
                            <div class="cedula-azul" style="background-color: #5E6F7C;">
                                <span class="m-0">
                                    Muito tempo em tarefas contábeis
                                </span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 p-0 mb-5">
                            <div class="cedula-cinza" style="background-color: #08243B;">
                                <span class="m-0">
                                    Acometimento de erros manuais
                                </span>
                            </div>
                        </div>
                    </div>
                    <button id="openModalButton" class="btn-cadastro">SOLUCIONAR AGORA!</button>
                </div>
            </section>
            <div id="contactModal" class="modal">
                <div class="modal-content">
                    <span id="closeModal" class="close">&times;</span>
                    <div class="row g-0">
                        <div class="col-sm-6 d-none d-sm-block bg-image"></div>
                        <div class="col-sm-6 p-4">
                            <div class="text-center">
                                <div class="h3 fw-light">Contact Form</div>
                                <p class="mb-4 text-muted">Split layout contact form</p>
                            </div>

                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">


                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                                    <label for="name">Name</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                </div>


                                <div class="form-floating mb-3">
                                    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                    <label for="emailAddress">Email Address</label>
                                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                                </div>


                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                                </div>


                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        <p>To activate this form, sign up at</p>
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>

                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
                                </div>


                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
                                </div>
                            </form>


                        </div>
                    </div>

                    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
<script>
    AOS.init();

    const openModalButton = document.getElementById("openModalButton");
    const contactModal = document.getElementById("contactModal");
    const closeModal = document.getElementById("closeModal");

    openModalButton.addEventListener("click", () => {
        contactModal.style.display = "block";
    });

    closeModal.addEventListener("click", () => {
        contactModal.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target == contactModal) {
            contactModal.style.display = "none";
        }
    });
</script>