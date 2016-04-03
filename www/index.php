<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Consultation Project on Material</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="./css/material.min.css">
    <link rel="stylesheet" href="./css/main.css">

    <script src="./js/material.min.js"></script>
</head>
<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Consultation Queue</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Accent-colored raised button with ripple -->
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    Clear
                </button>
            </div>
        </header>



        <main class="mdl-layout__content content-main-wrapper">

            <!-- DESCRIPTION -->
            <div class="mdl-card mdl-shadow--2dp full-width">
                <div class="mdl-card__supporting-text">
                    <p>Следующий сотрудник идёт только после возвращения предыдущего.</p>
                    <p>"Тот кто вернулся - сообщите следующему по очереди сотруднику
                    (и если вам не ответят - отправьтесь на поиски сотрудника, чтобы очередь продолжала идти)"</p>

                    <p>В колонку "время" запишите время, когда вернулись. Она помогает следующим сотрудникам понять, когда примерно дойдёт до них очередь.</p>
                </div>
            </div>

            <!-- DURATION -->
            <div class="mdl-card mdl-shadow--2dp full-width">
                <div class="mdl-card__supporting-text">
                    Average duration <span> 0:15</span>
                    <!-- Flat button with ripple -->
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect">
                        Reset
                    </button>
                </div>
            </div>

            <!-- TABLE -->
            <div class="mdl-card mdl-shadow--2dp full-width">

                <table class="mdl-data-table mdl-js-data-table qued-people-tbody full-width borderless">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="mdl-data-table__cell--non-numeric">Name</th>
                            <th>Call</th>
                            <th>Returns time</th>
                            <th>Duration</th>
                            <th>Approx</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Valerka</td>
                            <td></td>
                            <td>15:30</td>
                            <td>0:15</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Vovka Zaporozkiy</td>
                            <td></td>
                            <td>15:45</td>
                            <td>0:15</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" id="my-username" value="Denis">
                                    <label class="mdl-textfield__label" for="my-username">Name...</label>
                                </div>
                            </td>
                            <td>
                                <!-- Mini FAB button -->
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
                                    <i class="material-icons">update</i>
                                </button>

                                <!-- MDL Spinner Component with Single Color -->
                                <div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div>

                                <i class="material-icons">done</i>

                            </td>
                            <td></td>
                            <td></td>
                            <td>15:45</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Petka</td>
                            <td>
                                <!-- Mini FAB button -->
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab show-on-row-hover">
                                    <i class="material-icons">autorenew</i>
                                </button>
                            </td>
                            <td></td>
                            <td></td>
                            <td>16:00</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Vasya</td>
                            <td>
                                <!-- Mini FAB button -->
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab show-on-row-hover">
                                    <i class="material-icons">autorenew</i>
                                </button>
                            </td>
                            <td></td>
                            <td></td>
                            <td>16:15</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" id="new-username">
                                    <label class="mdl-textfield__label" for="new-username">Name...</label>
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- COMMENTS -->
            <div class="mdl-card mdl-shadow--2dp full-width">
                <div class="mdl-card__title">
                    <h4 class="mdl-card__title-text">Comments</h4>
                </div>
                <div class="mdl-card__supporting-text">
                    <!-- Floating Multiline Textfield -->
                    <form action="#">
                        <div class="mdl-textfield mdl-js-textfield textfield-wide">
                            <textarea class="mdl-textfield__input" type="text" rows= "15" id="sample5" ></textarea>
                            <label class="mdl-textfield__label" for="sample5">Text lines...</label>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

<script>
    setTimeout(function() {
        //alert('asd');
    }, 5000);
</script>
</body>
</html>