<?php
require_once 'header.php';
require_once 'php/Helper.php';
?>

    <div class="container ">
        <div class="jumbotron MinOpacity">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:50%">Entrée</th>
                        <th style="width:10%">Prix</th>
                        <th style="width:30%" class="text-center">Date entrée</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                              
                                <div class="col-sm-10">
                                    <h4 class="nomargin">numEntrée ...</h4>
                                    <p>nom Visiteur .. infors entrée visit</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">get prix entrée</td>
                       
                        <td data-th="date" class="text-center">1995-10-1</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
                            <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="visible-xs">
                        <td class="text-center"><strong>Total 1.99</strong></td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Continuer la visite</a></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
                        <td><a href="validationAchat.php" class="btn btn-success btn-block">Payement <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <?php
require_once 'footer.php';
?>
