<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* invoice/index.html.twig */
class __TwigTemplate_f662002016402e5ab77b2d4cdac2cdaa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/index.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Création d'une facture - Exemple</title>
    <!-- Bootstrap core CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">
</head>
<body class=\"bg-light\">
    <div class=\"container\">
        <main>
            <div class=\"py-5 text-center\">
";
        // line 15
        yield "                <div ";
        yield $this->extensions['Symfony\UX\React\Twig\ReactComponentExtension']->renderReactComponent("MyComponent", ["fullName" => "test"]);
        yield "></div>
                <p class=\"lead\">Vous pouvez générer facilement et rapidement des factures professionnelles personnalisées. Complétez simplement les informations requises, et notre outil se charge du reste pour vous offrir un document clair et précis, prêt à être envoyé à vos clients.</p>
            </div>

            <div id=\"app\" class=\"row g-5\">
                <div class=\"col-md-5 col-lg-4 order-md-last\">
                    <h4 class=\"mb-3\">Récapitulatif</h4>

                    <ul class=\"list-group mb-3\">
                        <li class=\"list-group-item d-flex justify-content-between lh-sm\">
                            <div>
                                <h6 class=\"my-0\">Total HT</h6>
                                <small class=\"text-muted\">Avant remise</small>
                            </div>
                            <span class=\"text-muted\">\${ totalPreTaxBeforeDiscount }€</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between bg-light\">
                            <div class=\"text-success\">
                                <h6 class=\"my-0\">Total Remise</h6>
                                <small>Globale à toutes prestations</small>
                            </div>
                            <span class=\"text-success\">−\${ totalDiscount }€</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between lh-sm\">
                            <div>
                                <h6 class=\"my-0\">Total HT</h6>
                                <small class=\"text-muted\">Après remise</small>
                            </div>
                            <span class=\"text-muted\">\${ totalPreTaxAfterDiscount }€</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between lh-sm\">
                            <div>
                                <h6 class=\"my-0\">Total TVA</h6>
                                <small class=\"text-muted\">Brief description</small>
                            </div>
                            <span class=\"text-muted\">\${ totalVat }€</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between\">
                            <span>Total TTC</span>
                            <strong>\${ totalTtc }€</strong>
                        </li>
                    </ul>

                    <form class=\"card p-2\">
                        <div class=\"input-group\">
                            <input v-model=\"totalDiscount\" type=\"text\" class=\"form-control\" placeholder=\"Remise\">
                            <a class=\"btn btn-secondary\">Valider</a>
                        </div>
                    </form>
                </div>
                <div class=\"col-md-7 col-lg-8\">
                    <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
                        <span class=\"text-primary\">Liste des préstations</span>
                        <span class=\"badge bg-primary rounded-pill\">\${prestations.length}</span>
                    </h4>

                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th scope=\"col\">#</th>
                            <th scope=\"col\">Préstation</th>
                            <th scope=\"col\">Quantité</th>
                            <th scope=\"col\">PU</th>
                            <th scope=\"col\">TVA</th>
                            <th scope=\"col\">TTC</th>
                            <th scope=\"col\">-</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr v-for=\"(product, index) in prestations\">
                                <td>#\${ index + 1}</td>
                                <td>\${product.label}</td>
                                <td>
                                    <div v-if=\"indexToUpdate != index\">
                                        \${product.quantity}
                                    </div>
                                    <div v-if=\"indexToUpdate == index\">
                                        <input v-model=\"product.quantity\" type=\"number\" class=\"form-control\" id=\"quantity\" placeholder=\"\" value=\"\" required style=\"width: 80px;\">
                                    </div>

                                </td>
                                <td>\${product.unitPrice}</td>
                                <td>\${product.vatPercentage}</td>
                                <td>\${product.totalIncludingTax}</td>
                                <td>
                                    <a href=\"#\">
                                        <i class=\"bi bi-pencil-square text-success\" @click=\"updatePrestation(index)\"></i>
                                    </a>
                                    <a href=\"#\">
                                        <i class=\"bi bi-trash text-danger\" @click=\"deletePrestation(index)\"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr v-if=\"prestations.length == 0\">
                                <td colspan=\"7\" class=\"text-center\">Aucune préstation ajoutée</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr class=\"my-4\">

                    <h5 class=\"mt-3 mb-3\">Ajout d'une préstation</h5>
                    <form class=\"needs-validation\" novalidate>
                        <div class=\"row g-3\">
                            <div class=\"col-sm-12\">
                                <label for=\"label\" class=\"form-label\">Préstation</label>
                                <input v-model=\"prestation.label\" type=\"text\" class=\"form-control\" id=\"label\" placeholder=\"\" value=\"\" required>
                            </div>
                            <div class=\"col-sm-3\">
                                <label for=\"quantity\" class=\"form-label\">Quantité</label>
                                <input v-model=\"prestation.quantity\" type=\"number\" class=\"form-control\" id=\"quantity\" placeholder=\"\" value=\"\" required>
                            </div>
                            <div class=\"col-sm-3\">
                                <label for=\"unitPrice\" class=\"form-label\">Prix unitaire</label>
                                <input v-model=\"prestation.unitPrice\" type=\"text\" class=\"form-control\" id=\"unitPrice\" placeholder=\"\" value=\"\" required>
                            </div>
                            <div class=\"col-md-3\">
                                <label for=\"vat\" class=\"form-label\">% TVA</label>
                                <select v-model=\"prestation.vatPercentage\" class=\"form-select\" id=\"vat\" required>
                                    <option selected value=\"\">Sélectionner...</option>
                                    <option value=\"20\">20%</option>
                                    <option value=\"10\">10%</option>
                                    <option value=\"5.5\">5.5%</option>
                                    <option value=\"0\">0%</option>
                                </select>
                            </div>
                            <div class=\"col-sm-3\">
                                <label for=\"totalPrice\" class=\"form-label\">Total TTC</label>
                                <input v-model=\"prestation.totalIncludingTax\" type=\"text\" class=\"form-control\" id=\"totalPrice\" placeholder=\"\" value=\"\" required>
                            </div>
                        </div>

                        <hr class=\"my-4\">

                        <a class=\"w-100 btn btn-primary btn-lg\" @click=\"addPrestation\">Ajouter</a>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js\"></script>
    ";
        // line 158
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "

    <script>
        var app = new Vue({
            el: '#app',
            delimiters: ['\${', '}'],
            data: {
                prestations: [
                    {
                        label: 'TEST 1',
                        quantity: 1,
                        unitPrice: 100,
                        vatPercentage : 20,
                        totalIncludingTax: 120
                    },
                    {
                        label: 'TEST 2',
                        quantity: 1,
                        unitPrice: 200,
                        vatPercentage : 10,
                        totalIncludingTax: 110
                    },
                ],
                prestation: {
                    label: null,
                    quantity: null,
                    unitPrice: null,
                    vatPercentage : null,
                    totalIncludingTax: null
                },
                totalDiscount: 0,
                indexToUpdate: null,
            },
            computed: {
                totalPreTaxBeforeDiscount: function (){
                    return this.prestations.reduce((acc, prestation) => acc + (prestation.unitPrice * prestation.quantity), 0);
                },
                totalPreTaxAfterDiscount: function (){
                    return this.totalPreTaxBeforeDiscount - this.totalDiscount;
                },
                totalVat: function (){
                    return this.prestations.reduce((acc, prestation) => acc + ((prestation.unitPrice * prestation.quantity) * prestation.vatPercentage / 100), 0);
                },
                totalTtc: function (){
                    return this.totalPreTaxBeforeDiscount + this.totalVat;
                },
            },
            methods: {
                addPrestation: function (){
                    this.prestations.push(this.prestation);
                    //this.clearData();
                },
                updatePrestation: function (index){
                    this.indexToUpdate = index;
                },
                deletePrestation: function (index){
                    Vue.delete(this.prestations, index);
                },
                clearData: function (){
                    this.prestation.label = null;
                    this.prestation.quantity = null;
                    this.prestation.unitPrice = null;
                    this.prestation.vatPercentage = null;
                    this.prestation.totalIncludingTax = null;
                }
            },
            watch : {
                prestation: {
                    handler(newValue, oldValue) {
                        newValue.totalIncludingTax = (newValue.quantity * newValue.unitPrice) + ((newValue.quantity * newValue.unitPrice) * newValue.vatPercentage / 100);
                    },
                    deep: true
                },
            }
        })
    </script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "invoice/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  203 => 158,  56 => 15,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Création d'une facture - Exemple</title>
    <!-- Bootstrap core CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">
</head>
<body class=\"bg-light\">
    <div class=\"container\">
        <main>
            <div class=\"py-5 text-center\">
{#                <h2>Création d'une facture</h2>#}
                <div {{ react_component('MyComponent', { 'fullName': 'test' }) }}></div>
                <p class=\"lead\">Vous pouvez générer facilement et rapidement des factures professionnelles personnalisées. Complétez simplement les informations requises, et notre outil se charge du reste pour vous offrir un document clair et précis, prêt à être envoyé à vos clients.</p>
            </div>

            <div id=\"app\" class=\"row g-5\">
                <div class=\"col-md-5 col-lg-4 order-md-last\">
                    <h4 class=\"mb-3\">Récapitulatif</h4>

                    <ul class=\"list-group mb-3\">
                        <li class=\"list-group-item d-flex justify-content-between lh-sm\">
                            <div>
                                <h6 class=\"my-0\">Total HT</h6>
                                <small class=\"text-muted\">Avant remise</small>
                            </div>
                            <span class=\"text-muted\">\${ totalPreTaxBeforeDiscount }€</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between bg-light\">
                            <div class=\"text-success\">
                                <h6 class=\"my-0\">Total Remise</h6>
                                <small>Globale à toutes prestations</small>
                            </div>
                            <span class=\"text-success\">−\${ totalDiscount }€</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between lh-sm\">
                            <div>
                                <h6 class=\"my-0\">Total HT</h6>
                                <small class=\"text-muted\">Après remise</small>
                            </div>
                            <span class=\"text-muted\">\${ totalPreTaxAfterDiscount }€</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between lh-sm\">
                            <div>
                                <h6 class=\"my-0\">Total TVA</h6>
                                <small class=\"text-muted\">Brief description</small>
                            </div>
                            <span class=\"text-muted\">\${ totalVat }€</span>
                        </li>
                        <li class=\"list-group-item d-flex justify-content-between\">
                            <span>Total TTC</span>
                            <strong>\${ totalTtc }€</strong>
                        </li>
                    </ul>

                    <form class=\"card p-2\">
                        <div class=\"input-group\">
                            <input v-model=\"totalDiscount\" type=\"text\" class=\"form-control\" placeholder=\"Remise\">
                            <a class=\"btn btn-secondary\">Valider</a>
                        </div>
                    </form>
                </div>
                <div class=\"col-md-7 col-lg-8\">
                    <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
                        <span class=\"text-primary\">Liste des préstations</span>
                        <span class=\"badge bg-primary rounded-pill\">\${prestations.length}</span>
                    </h4>

                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th scope=\"col\">#</th>
                            <th scope=\"col\">Préstation</th>
                            <th scope=\"col\">Quantité</th>
                            <th scope=\"col\">PU</th>
                            <th scope=\"col\">TVA</th>
                            <th scope=\"col\">TTC</th>
                            <th scope=\"col\">-</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr v-for=\"(product, index) in prestations\">
                                <td>#\${ index + 1}</td>
                                <td>\${product.label}</td>
                                <td>
                                    <div v-if=\"indexToUpdate != index\">
                                        \${product.quantity}
                                    </div>
                                    <div v-if=\"indexToUpdate == index\">
                                        <input v-model=\"product.quantity\" type=\"number\" class=\"form-control\" id=\"quantity\" placeholder=\"\" value=\"\" required style=\"width: 80px;\">
                                    </div>

                                </td>
                                <td>\${product.unitPrice}</td>
                                <td>\${product.vatPercentage}</td>
                                <td>\${product.totalIncludingTax}</td>
                                <td>
                                    <a href=\"#\">
                                        <i class=\"bi bi-pencil-square text-success\" @click=\"updatePrestation(index)\"></i>
                                    </a>
                                    <a href=\"#\">
                                        <i class=\"bi bi-trash text-danger\" @click=\"deletePrestation(index)\"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr v-if=\"prestations.length == 0\">
                                <td colspan=\"7\" class=\"text-center\">Aucune préstation ajoutée</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr class=\"my-4\">

                    <h5 class=\"mt-3 mb-3\">Ajout d'une préstation</h5>
                    <form class=\"needs-validation\" novalidate>
                        <div class=\"row g-3\">
                            <div class=\"col-sm-12\">
                                <label for=\"label\" class=\"form-label\">Préstation</label>
                                <input v-model=\"prestation.label\" type=\"text\" class=\"form-control\" id=\"label\" placeholder=\"\" value=\"\" required>
                            </div>
                            <div class=\"col-sm-3\">
                                <label for=\"quantity\" class=\"form-label\">Quantité</label>
                                <input v-model=\"prestation.quantity\" type=\"number\" class=\"form-control\" id=\"quantity\" placeholder=\"\" value=\"\" required>
                            </div>
                            <div class=\"col-sm-3\">
                                <label for=\"unitPrice\" class=\"form-label\">Prix unitaire</label>
                                <input v-model=\"prestation.unitPrice\" type=\"text\" class=\"form-control\" id=\"unitPrice\" placeholder=\"\" value=\"\" required>
                            </div>
                            <div class=\"col-md-3\">
                                <label for=\"vat\" class=\"form-label\">% TVA</label>
                                <select v-model=\"prestation.vatPercentage\" class=\"form-select\" id=\"vat\" required>
                                    <option selected value=\"\">Sélectionner...</option>
                                    <option value=\"20\">20%</option>
                                    <option value=\"10\">10%</option>
                                    <option value=\"5.5\">5.5%</option>
                                    <option value=\"0\">0%</option>
                                </select>
                            </div>
                            <div class=\"col-sm-3\">
                                <label for=\"totalPrice\" class=\"form-label\">Total TTC</label>
                                <input v-model=\"prestation.totalIncludingTax\" type=\"text\" class=\"form-control\" id=\"totalPrice\" placeholder=\"\" value=\"\" required>
                            </div>
                        </div>

                        <hr class=\"my-4\">

                        <a class=\"w-100 btn btn-primary btn-lg\" @click=\"addPrestation\">Ajouter</a>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js\"></script>
    {{ encore_entry_script_tags('app') }}

    <script>
        var app = new Vue({
            el: '#app',
            delimiters: ['\${', '}'],
            data: {
                prestations: [
                    {
                        label: 'TEST 1',
                        quantity: 1,
                        unitPrice: 100,
                        vatPercentage : 20,
                        totalIncludingTax: 120
                    },
                    {
                        label: 'TEST 2',
                        quantity: 1,
                        unitPrice: 200,
                        vatPercentage : 10,
                        totalIncludingTax: 110
                    },
                ],
                prestation: {
                    label: null,
                    quantity: null,
                    unitPrice: null,
                    vatPercentage : null,
                    totalIncludingTax: null
                },
                totalDiscount: 0,
                indexToUpdate: null,
            },
            computed: {
                totalPreTaxBeforeDiscount: function (){
                    return this.prestations.reduce((acc, prestation) => acc + (prestation.unitPrice * prestation.quantity), 0);
                },
                totalPreTaxAfterDiscount: function (){
                    return this.totalPreTaxBeforeDiscount - this.totalDiscount;
                },
                totalVat: function (){
                    return this.prestations.reduce((acc, prestation) => acc + ((prestation.unitPrice * prestation.quantity) * prestation.vatPercentage / 100), 0);
                },
                totalTtc: function (){
                    return this.totalPreTaxBeforeDiscount + this.totalVat;
                },
            },
            methods: {
                addPrestation: function (){
                    this.prestations.push(this.prestation);
                    //this.clearData();
                },
                updatePrestation: function (index){
                    this.indexToUpdate = index;
                },
                deletePrestation: function (index){
                    Vue.delete(this.prestations, index);
                },
                clearData: function (){
                    this.prestation.label = null;
                    this.prestation.quantity = null;
                    this.prestation.unitPrice = null;
                    this.prestation.vatPercentage = null;
                    this.prestation.totalIncludingTax = null;
                }
            },
            watch : {
                prestation: {
                    handler(newValue, oldValue) {
                        newValue.totalIncludingTax = (newValue.quantity * newValue.unitPrice) + ((newValue.quantity * newValue.unitPrice) * newValue.vatPercentage / 100);
                    },
                    deep: true
                },
            }
        })
    </script>
</body>
</html>
", "invoice/index.html.twig", "/mnt/2896C8D096C89FA4/AccesSAP/Projects/ReactProject/templates/invoice/index.html.twig");
    }
}
