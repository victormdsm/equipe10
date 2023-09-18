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
            <div class="container col-7" data-aos="fade-right">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="col-2 container-orange p-3" style="background-color: #5E6F7C">
                                <span class="cel-1">
                                    Dificuldades ao gerenciar empresas
                                </span>
                            </td>
                            <td class="col-3 container-blue p-3" style="background-color: #08243B;"><span class="cel-1">
                                    Dificuldade em gerar relatórios
                                </span></td>
                            <td class="col-2 container-orange p-3 " style="background-color: #5E6F7C;">
                                <span class="cel-1">
                                    Manter a conformidade fiscal
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container col-7 ">
                <table class="table" data-aos="fade-left">
                    <tbody>
                        <tr>
                            <td class="col-2 col-md-3container-orange p-3" style="background-color: #08243B">
                                <span class="cel-1">
                                    Falta de controle de dados
                                </span>
                            </td>
                            <td class="col-3 container-blue p-3" style="background-color: #5E6F7C;">
                                <span class="cel-1">
                                    Gastando muito tempo em tarefas contábeis
                                </span>
                            </td>
                            <td class="col-2 container-orange p-3 " style="background-color: #08243B;">
                                <span class="cel-1">
                                    Acometimento de erros manuais
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button href="#" class="btn-cadastro">SOLUCIONAR AGORA!</button>
            </div>

        </section>
    </div>

</body>

</html>
<script>
    AOS.init();
</script>