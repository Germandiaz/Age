<div >
    <?php $atributos = array('id' => 'nueultmov_form', 'class' => 'form_nueultmov');
                echo form_open('usuarioingresado', $atributos); ?>
</div>
<div>
    <ul>
        <li><a>&lt;</a></li>
        <li><a><strong>0</strong> de <span>x</span></a></li>
        <li><a >&gt;</a></li>
    </ul>
</div>
<div>
    <input type="hidden" id="swpag" value="ultmov" >
        <table width="662" border="0" id="tabpag">
            <thead>
                <tr>
                    <td style="border-width: 0px; ">Descripci&#243;n</td>
                    <td style="border-width: 0px; ">Fecha realizaci&#243;n</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listar as $Valor) { ?>
                <tr>
                    <td style="border-width: 0px; "> <?php echo $Valor['descripcion'] ?> </td>
                    <td style="border-width: 0px; "> <?php echo $Valor['fec'] ?> </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
</div>