<?php

namespace AulaPW\View;

class Tabela
{
    public $dados;

    public function Exibir()
    {
?>
        <!DOCTYPE html>
        <html>

        <head>
            <link rel="stylesheet" media="all" href="../view/tabela.css" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>

        <body>
            <table>
                <tr>
                    <?php foreach ($this->dados[0] as $coluna => $valor) { ?>
                        <th><?php echo $coluna ?></th>
                    <?php } ?>
                </tr>
                <?php foreach ($this->dados as $linha) { ?>
                    <tr>
                        <?php foreach ($linha as $valor) { ?>
                            <td><?php echo $valor ?></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </table>
        </body>

        </html>
<?php
    }
}
?>