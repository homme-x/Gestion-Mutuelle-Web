<?php use yii\widgets\LinkPager;

$this->beginBlock('title') ?>
Exercices
<?php $this->endBlock() ?>
<?php $this->beginBlock('style') ?>
<style>
    .bl {
        border: 3px solid;
        padding: 5px 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }
    .bl h2 {
        text-align: right;
    }

    .b-amount {
        border-color: dodgerblue;
        color: dodgerblue;
        background-color: rgba(30, 144, 255, 0.17);
    }
    
    .b-saved {
        border-color: blueviolet;
        color: blueviolet;
        background-color: rgba(138, 43, 226, 0.22);
    }
    .b-borrowed {
        border-color: darkviolet;
        color: darkviolet;
        background-color: rgba(148, 0, 211, 0.34);
    }
    .b-refunded {
        border-color: mediumvioletred;
        color: mediumvioletred;
        background-color: rgba(199, 21, 133, 0.38);
    }
    .b-interest {
        border-color: red;
        color: red;
        background-color: rgba(255, 0, 0, 0.3);
    }

    .b-agape {
        border-color: rgba(255, 47, 0, 0.8);
        color: rgba(255, 47, 0, 0.89);
        background-color: rgba(255, 47, 0, 0.51);
    }


    .b-fondsocial {
        border-color: rgba(173, 225, 119, 0.87);
        color: rgba(36, 65, 10, 0.89);
        background-color: rgba(199, 236, 168, 0.86);
    }

</style>
<?php $this->endBlock() ?>
<<<<<<< HEAD
=======

>>>>>>> 46a6216 (Il manque quelques détails à ajuster sinon c'est déja presque bon.)
<div class="container mt-5 mb-5">
    <div class="row">
        <?php
        $labels = [];

        $data = [];
        $colors = [];
        ?>
<<<<<<< HEAD
        <?php if(count($exercises)):?>
            <?php
            $exercise = $exercises[0];
            $members = \app\models\Member::find()->all();  ?>
=======

        <?php if(count($exercises)):?>

            <?php
            $exercise = $exercises[0];
            $members = \app\models\Member::find()->all();  ?>

>>>>>>> 46a6216 (Il manque quelques détails à ajuster sinon c'est déja presque bon.)
            <div class="col-12 white-block mb-2">
                <h1 class="text-muted text-center">Exercice de l'année <span class="blue-text"><?= $exercises[0]->year ?></span></h1>
                <h3 class="text-secondary text-center"><?= $exercises[0]->active?"En cours":"Terminé" ?></h3>
            </div>

            <div class="col-12 mb-2">
                <div class="row">
                    <?php
                    if (count($members)):
                    ?>
                    <!-- <div class="col-md-8 p-1">
                        <div class="white-block">
                            <h3 class="my-3 text-center">Répartion des intérêts</h3>
                            <canvas id="pieChart"></canvas>
                        </div>
                        <div class="white-block mt-2">
                            <h3 class="my-3 text-center">Evolution des entrées durant l'exercice</h3>
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div> -->
                    <?php
                    endif;
                    ?>
<<<<<<< HEAD
=======

>>>>>>> 46a6216 (Il manque quelques détails à ajuster sinon c'est déja presque bon.)
                    <div class="col-md-4 p-1 d-flex ">
                        <div class="white-block d-flex flex-row">
                            <div class="bl b-amount ml-4 mr-4">
                                <h5>Fond total</h5>
                                <h2><?= ($t=$exercise->exerciseAmount())?$t:0 ?> XAF</h2>
                            </div>
                            
                            <div class="bl b-saved ml-4 mr-4">
                                <h5>Montant épargné</h5>
                                <h2><?= ($t=$exercise->totalSavedAmount())?$t:0 ?> XAF</h2>
                            </div>
                            <div class="bl b-borrowed ml-4 mr-4">
                                <h5>Montant emprunté</h5>
                                <h2><?= ($t=$exercise->totalBorrowedAmount())?$t:0 ?> XAF</h2>
                            </div>
                            <div class="bl b-refunded ml-4 mr-4">
                                <h5>Montant remboursé</h5>
                                <h2><?= ($t=$exercise->totalRefundedAmount()) ?$t:0 ?> XAF</h2>
                            </div>
                            <div class="bl b-interest ml-4 mr-4">
                                <h5>Intérêt produit</h5>
                                <h2><?= ($t=$exercise->interest())?$t:0 ?> XAF</h2>
                            </div>
                            <div class="bl b-agape ml-4 mr-4">
                                <h5>Montant Agapè</h5>
                                <h2><?= ($t=$exercise->totalAgapeAmount()) ?$t:0 ?> XAF</h2>
                            </div>
                            <?php if($exercise && \app\managers\FinanceManager::numberOfSession() == 12):?>
                            <div class="bl b-fondsocial ml-4 mr-4">
                                <h5>Le montant d'Inscription pour le prochain Exercice est :</h5>
                                <h2><?= ($t=$exercise->renflouementAmount()) ?$t:0 ?> XAF</h2>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>



            <?php if ( count($members) ):?>
                <div class="col-12 white-block">

                    <h3 class="text-center my-4 blue-text">Bilan de l'exercice</h3>

                    <table class="table table-hover">
                        <thead class="blue-grey lighten-4">
                        <tr>
                            <th>Membre</th>
                            <th>Montant épargné</th>
                            <th>Montant emprunté</th>
                            <th>Dette remboursée</th>
                            <th>Intérêt sur les dettes</th>
<<<<<<< HEAD
                            <th>Fond Social</th>
                            <th>Inscription</th>
                            <th>Renflouement</th>
=======
                            <th>Inscription</th>
                            <th>renflouement</th>
>>>>>>> 46a6216 (Il manque quelques détails à ajuster sinon c'est déja presque bon.)

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($members as $member): ?>
                            <?php
                            $user = $member->user();
                            $savedAmount = $member->savedAmount($exercise);
                            $borrowedAmount = $member->borrowedAmount($exercise);
                            $refundedAmount = $member->refundedAmount($exercise);
                            $interest = $member->interest($exercise);
                            $sc = $member->social_crown;
                            $insc = $member->inscription;

                            $labels[] = $user->name . " " . $user->first_name;
                            $data[] = $interest?$interest:0;
                            $colors[] = \app\managers\ColorManager::getColor();
                            ?>
                            <tr>
                                <td class="text-capitalize"><?= $user->name . " " . $user->first_name ?></td>
                                <td><?= $savedAmount?$savedAmount:0 ?> XAF</td>
                                <td><?= $borrowedAmount?$borrowedAmount:0 ?> XAF</td>
                                <td><?= $refundedAmount?$refundedAmount:0 ?> XAF</td>
                                <td class="blue-text"><?= $interest ?> XAF</td>
                                <td class="blue-text"><?= $insc ?> XAF</td>
<<<<<<< HEAD
                                <td class="blue-text"><?= $sc ?> XAF</td>
=======
>>>>>>> 46a6216 (Il manque quelques détails à ajuster sinon c'est déja presque bon.)
                                <td class="blue-text"><?= \app\managers\SettingManager::getSocialCrown()-$sc ?> XAF</td>
                                </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif;?>

            <div class="col-12 p-2">
                <nav aria-label="Page navigation example">
                    <?= LinkPager::widget(['pagination' => $pagination,
                        'options' => [
                            'class' => 'pagination pagination-circle justify-content-center pg-blue mb-0',
                        ],
                        'pageCssClass' => 'page-item',
                        'disabledPageCssClass' => 'd-none',
                        'prevPageCssClass' => 'page-item',
                        'nextPageCssClass' => 'page-item',
                        'firstPageCssClass' => 'page-item',
                        'lastPageCssClass' => 'page-item',
                        'linkOptions' => ['class' => 'page-link']
                    ]) ?>
                </nav>

            </div>

        <?php else: ?>
<<<<<<< HEAD
=======

>>>>>>> 46a6216 (Il manque quelques détails à ajuster sinon c'est déja presque bon.)
            <div class="col-12 white-block">
                <h1 class="text-center text-muted">Aucun exercice créé.</h1>
            </div>

        <?php endif; ?>
<<<<<<< HEAD
=======

>>>>>>> 46a6216 (Il manque quelques détails à ajuster sinon c'est déja presque bon.)
    </div>
</div>


<?php $this->beginBlock('script') ?>
<script>

    <?php

    $lLabels = [];
    $lData = [];

    if(isset($exercise))
    {
        $sessions = \app\models\Session::find()->where(['exercise_id' => $exercise->id])->orderBy('created_at',SORT_ASC)->all();
        $sum = 0;

        foreach ($sessions as $index => $session) {
            $lLabels[] = "Session ".($index+1);
            $lData[] = ($session->totalAmount());
        }
    }

    ?>
<<<<<<< HEAD
=======

>>>>>>> 46a6216 (Il manque quelques détails à ajuster sinon c'est déja presque bon.)
    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
            labels: <?= json_encode($lLabels) ?>,
            datasets: [
                {
                    backgroundColor: [
                        'rgba(120, 137, 132, .3)',
                    ],
                    borderColor: [
                        'rgba(0, 10, 130, .7)',
                    ],
                    data: <?= json_encode($lData) ?>
                }
            ]
        },
        options: {
            responsive: true,
            legend: false
        }
    });


<<<<<<< HEAD

=======
>>>>>>> 46a6216 (Il manque quelques détails à ajuster sinon c'est déja presque bon.)
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
        type: 'pie',
        data: {
            labels: <?= json_encode($labels) ?>,
            datasets: [{
                data:  <?= json_encode($data) ?>,
                backgroundColor: <?= json_encode($colors) ?>
            }]
        },
        options: {
            responsive: true,
            legend: {
                display : true
            }
        }
    });

</script>
<?php $this->endBlock() ?>
