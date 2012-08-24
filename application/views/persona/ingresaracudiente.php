<div class="cleared"></div>
</div>
<div class="art-layout-cell art-content">
    <div class="art-post">
        <div class="art-post-tl"></div>
        <div class="art-post-tr"></div>
        <div class="art-post-bl"></div>
        <div class="art-post-br"></div>
        <div class="art-post-tc"></div>
        <div class="art-post-bc"></div>
        <div class="art-post-cl"></div>
        <div class="art-post-cr"></div>
        <div class="art-post-cc"></div>
        <div class="art-post-body">
            <div class="art-post-inner art-article">

                <div class="art-postcontent">
                    <p align="left">&nbsp;<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="consultaracudiente.html">Aceptar</a></span>&nbsp;

                    <p><br /></p>
                    <table width="700" border="0">
                        <?php
                        $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
                        echo form_open('usuarios/confirmar_Contrasena', $atributos);
                        $PrimerNombreAcu = array(
                            'name' => 'txtprimernombreAcudiente',
                            'id' => 'txtprimernombreAcudiente',
                            'value' => set_value('txtprimernombreAcudiente')
                            );
                            $SegNombreAcu = array(
                            'name' => 'txtsegundonombreAcudiente',
                            'id' => 'txtsegundonombreAcudiente',
                            'value' => set_value('txtsegundonombreAcudiente')
                        );
                            $PriApellidoAcu = array(
                            'name' => 'txtprimerapellidoAcudiente',
                            'id' => 'txtprimerapellidoAcudiente',
                            'value' => set_value('txtprimerapellidoAcudiente')
                        );
                            $SegApellidoAcu = array(
                            'name' => 'txtsegundoapellidoAcudiente',
                            'id' => 'txtsegundoapellidoAcudiente',
                            'value' => set_value('txtsegundoapellidoAcudiente')
                        );
                        $EstadoCivil = array(
                            'name' => 'txtEstadoCivil',
                            'id' => 'txtEstadoCivil',
                            'value' => set_value('txtEstadoCivil')
                        );    
                            $FecNacimientoAcu = array(
                            'name' => 'txtfechanacimientoAcudiente',
                            'id' => 'txtfechanacimientoAcudiente',
                            'value' => set_value('txtfechanacimientoAcudiente')
                        );
                            $TelefonoAcu = array(
                            'name' => 'txttelefonoAcudiente',
                            'id' => 'txttelefonoAcudiente',
                            'value' => set_value('txttelefonoAcudiente')
                        );
                            $DirResidenciaAcu = array(
                            'name' => 'txtdireccionresidenciaAcudiente',
                            'id' => 'txtdireccionresidenciaAcudiente',
                            'value' => set_value('txtdireccionresidenciaAcudiente')
                        );
                            $CelularAcu = array(
                            'name' => 'txtcelularAcudiente',
                            'id' => 'txtcelularAcudiente',
                            'value' => set_value('txtcelularAcudiente')
                        );
                            $CorElectronicoAcu = array(
                            'name' => 'txtcorreoelectronicoAcudiente',
                            'id' => 'txtcorreoelectronicoAcudiente',
                            'value' => set_value('txtcorreoelectronicoAcudiente')
                        );
                            $NroDocumentoAcu = array(
                            'name' => 'txtnumerodocumentoAcudiente',
                            'id' => 'txtnumerodocumentoAcudiente',
                            'value' => set_value('txtnumerodocumentoAcudiente')
                        );
                        $TipoDocumentoAcu = array(
                            'name' => 'txtTipoDocumentoAcudiente',
                            'id' => 'txtTipoDocumentoAcudiente',
                            'value' => set_value('txtTipoDocumentoAcudiente')
                        );
                            $FotoAcu = array(
                            'name' => 'txtfotoAcudiente',
                            'id' => 'txtfotoAcudiente',
                            'value' => set_value('txtfotoAcudiente')
                        );
                        $Rh = array(
                            'name' => 'txtRh',
                            'id' => 'txtRh',
                            'value' => set_value('txtRh')
                        );
                        $Pais = array(
                            'name' => 'txtPais',
                            'id' => 'txtPais',
                            'value' => set_value('txtPais')
                        );
                        ?>
                        <tbody>
                            <tr>
                                <th width="278" align="left" style="border-width: 0px; ">Nuevo Acudiente:</th>
                                <td width="51" style="border-width: 0px; ">&nbsp;</td>
                                <td width="247" style="border-width: 0px; ">&nbsp;</td>
                                <td width="106" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    <br />
                    <table width="700" border="0">
                        <tbody>
                            <tr>
                                <th width="151" align="left" style="border-width: 0px; ">Primer Nombre:</th>
                                <td width="151" style="border-width: 0px; "><? echo form_input($PrimerNombreAcu); ?></td>
                                <td width="13" style="border-width: 0px; ">&nbsp;</td>
                                <th width="208" align="left" style="border-width: 0px; ">Fecha Ingreso:</th>
                                <td width="155" style="border-width: 0px; "><? echo form_label('31/03/2011'); ?></td>
                            </tr>
                            <tr>
                                <th align="rigth" style="border-width: 0px; ">Segundo Nombre:</th>
                                <td style="border-width: 0px; "><? echo form_input($SegNombreAcu); ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th align="rigth" style="border-width: 0px; ">Pais de Nacimiento:</th>
                                <td style="border-width: 0px; "><? echo form_input($Pais); ?>    
                                    
                                </td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; ">Primer Apellido:</th>
                                <td style="border-width: 0px; "><? echo form_input($PriApellidoAcu); ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th align="left" style="border-width: 0px; ">Departamento de Nacimiento:</th>
                                <td style="border-width: 0px; ">
                                    <select name="selectdepartamento" id="selectdepartamento">
                                        <option value="01">Seleccione</option>
                                        <option value="02">Amazonas</option>
                                        <option value="03" selected="selected">Antioquia</option>
                                        <option value="04">Arauca</option>
                                        <option value="05">Atlántico</option>
                                        <option value="06">Bolívar</option>
                                        <option value="07">Boyacá</option>
                                        <option value="08">Caldas</option>
                                        <option value="09">Caquetá</option>
                                        <option value="10">Casanare</option>
                                        <option value="11">Cauca</option>
                                        <option value="12">Cesar</option>
                                        <option value="13">Chocó</option>
                                        <option value="14">Córdoba</option>
                                        <option value="15">Cundinamarca</option>
                                        <option value="16">Guainía</option>
                                        <option value="17">Guaviare</option>
                                        <option value="18">Hulia</option>
                                        <option value="19">La Guajira</option>
                                        <option value="20">Magdalena</option>
                                        <option value="21">Meta</option>
                                        <option value="22">Nariño</option>
                                        <option value="23">Norte de Santander</option>
                                        <option value="24">Putumayo</option>
                                        <option value="25">Quindío</option>
                                        <option value="26">Risaralda</option>
                                        <option value="27">San Andrés</option>
                                        <option value="28">Santander</option>
                                        <option value="29">Sucre</option>
                                        <option value="30">Tolima</option>
                                        <option value="31">Valle del Cauca</option>
                                        <option value="32">Vaupés</option>
                                        <option value="33">Vichada</option>
                                        <option value="34">Alicante</option>
                                        <option value="35">Almeria</option>
                                        <option value="36">Barcelona</option>
                                        <option value="37">Bilbao</option>
                                        <option value="38">Burgos</option>
                                        <option value="39">Cádiz</option>
                                        <option value="40">Cartagena</option>
                                        <option value="41">Córdoba</option>
                                        <option value="42">Gerona</option>
                                        <option value="43">Granada</option>
                                        <option value="44">Huelva</option>
                                        <option value="45">Islas Canarias</option>
                                        <option value="46">Islas Baleares</option>
                                        <option value="47">Jerez</option>
                                        <option value="48">Madrid</option>
                                        <option value="49">Málaga</option>
                                        <option value="50">Marbella</option>
                                        <option value="51">Murcia</option>
                                        <option value="52">Pamplona</option>
                                        <option value="53">Ronda</option>
                                        <option value="54">Salamanca</option>
                                        <option value="55">San Sebastián</option>
                                        <option value="56">Santiago</option>
                                        <option value="57">Sevilla</option>
                                        <option value="58">Tarragona</option>
                                        <option value="59">Toledo</option>
                                        <option value="60">Valencia</option>
                                        <option value="61">Zaragoza</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; ">Segundo Apellido:</th>
                                <td style="border-width: 0px; "><? echo form_input($SegApellidoAcu); ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th align="left" style="border-width: 0px; ">Municipio de Nacimiento:</th>
                                <td style="border-width: 0px; ">
                                    <select name="selectmunicipio" id="selectmunicipio">
                                        <option>Seleccione</option>
                                        <option>Santafé de Bogota</option>
                                        <option>Puerto Nariño</option>
                                        <option>Leticia</option>
                                        <option selected="selected">Medellín</option>
                                        <option>Abejorral</option>
                                        <option>Abriaqui</option>
                                        <option>Alejandría</option>
                                        <option>Amagá</option>
                                        <option>Amalfi</option>
                                        <option>Andes</option>
                                        <option>Angelópolis</option>
                                        <option>Angostura</option>
                                        <option>Anorí</option>
                                        <option>Antioquia</option>
                                        <option>Apartadó</option>
                                        <option>Anza</option>
                                        <option>Apartadó</option>
                                        <option>Arboletes</option>
                                        <option>Argelia</option>
                                        <option>Armenia</option>
                                        <option>Barbosa</option>
                                        <option>Belmira</option>
                                        <option>Bello</option>
                                        <option>Betania</option>
                                        <option>Betulia</option>
                                        <option>Bolívar</option>
                                        <option>Briseño</option>
                                        <option>Buritica</option>
                                        <option>Cáceres</option>
                                        <option>Caicedo</option>
                                        <option>Caldas</option>
                                        <option>Campamento</option>
                                        <option>Cañasgordas</option>
                                        <option>Caracolí</option>
                                        <option>Caramanta</option>
                                        <option>Carepa</option>
                                        <option>Carmen de Viboral</option>
                                        <option>Carolina</option>
                                        <option>Caucasia</option>
                                        <option>Chigorodó</option>
                                        <option>Cisneros</option>
                                        <option>Cocorná</option>
                                        <option>Concepción</option>
                                        <option>Concordia</option>
                                        <option>Copacabana</option>
                                        <option>Dabeiba</option>
                                        <option>Don Matías</option>
                                        <option>Ebéjico</option>
                                        <option>El Bagre</option>
                                        <option>Entrerríos</option>
                                        <option>Envigado</option>
                                        <option>Fredonia</option>
                                        <option>Frontino</option>
                                        <option>Giraldo</option>
                                        <option>Girardota</option>
                                        <option>Gómez Plata</option>
                                        <option>Granada</option>
                                        <option>Guadalupe</option>
                                        <option>Guarne</option>
                                        <option>Guatapé</option>
                                        <option>Heliconia</option>
                                        <option>Hispania</option>
                                        <option>Itagüí</option>
                                        <option>Ituango</option>
                                        <option>Jardín</option>
                                        <option>Jericó</option>
                                        <option>La Ceja</option>
                                        <option>La Estrella</option>
                                        <option>La Pintada</option>
                                        <option>La Unión</option>
                                        <option>Liborina</option>
                                        <option>Maceo</option>
                                        <option>Marinilla</option>
                                        <option>Montebello</option>
                                        <option>Murindó</option>
                                        <option>Mutatá</option>
                                        <option>Nariño</option>
                                        <option>Necoclí</option>
                                        <option>Nechí</option>
                                        <option>Olaya</option>
                                        <option>Peñol</option>
                                        <option>Peque</option>
                                        <option>Pueblorrico</option>
                                        <option>Puerto Berrío</option>
                                        <option>Puerto Nare</option>
                                        <option>Puerto Triunfo</option>
                                        <option>Remedios</option>
                                        <option>Retiro</option>
                                        <option>Rionegro</option>
                                        <option>Sabanalarga</option>
                                        <option>Sabaneta</option>
                                        <option>Salgar</option>
                                        <option>San Andrés</option>
                                        <option>San Carlos</option>
                                        <option>San francisco</option>
                                        <option>San Jerónimo</option>
                                        <option>San José de Montaña</option>
                                        <option>San Juan de Urabá</option>
                                        <option>San Luis</option>
                                        <option>San Pedro</option>
                                        <option>San Pedro de Urabá</option>
                                        <option>San Rafael</option>
                                        <option>San Roque</option>
                                        <option>San Vicente</option>
                                        <option>Santa Bárbara</option>
                                        <option>Santa Rosa de Osos</option>
                                        <option>Santo Domingo</option>
                                        <option>Santuario</option>
                                        <option>Segovia</option>
                                        <option>Sonsón</option>
                                        <option>Sopetrán</option>
                                        <option>Támesis</option>
                                        <option>Taraza</option>
                                        <option>Tarso</option>
                                        <option>Titiribí</option>
                                        <option>Toledo</option>
                                        <option>Turbo</option>
                                        <option>Uramita</option>
                                        <option>Urrao</option>
                                        <option>Valdivia</option>
                                        <option>Valparaíso</option>
                                        <option>Vegachi</option>
                                        <option>Venecia</option>
                                        <option>Vigía del Fuerte</option>
                                        <option>Yalí</option>
                                        <option>Yarumal</option>
                                        <option>Yolombó</option>
                                        <option>Yondó (Casabe)</option>
                                    </select>
                                </td>
                            </tr>        
                            <tr>
                                <th align="left" style="border-width: 0px; ">Estado Civil:</th>
                                <td style="border-width: 0px; "> <? echo form_input($EstadoCivil); ?></td>
                                   
                                </td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th align="left" style="border-width: 0px; ">Procedencia:</th>
                                <td style="border-width: 0px; ">
                                    <select name="selectprocedencia" id="selectprocedencia">
                                        <option value="01">Seleccione</option>
                                        <option value="02" selected="selected">Urbano</option>
                                        <option value="03">Rural</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; ">Tipo documento:</th>
                                <td style="border-width: 0px; "><? echo form_input($TipoDocumentoAcu); ?>
                                    
                                        
                                </td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th align="left" style="border-width: 0px; ">Nro documento:</th>
                                <td style="border-width: 0px; "><? echo form_input($NroDocumentoAcu); ?></td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; ">Fecha Nacimiento:</th>
                                <td style="border-width: 0px; "><? echo form_input($FecNacimientoAcu); ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th align="left" style="border-width: 0px; ">Religión:</th>
                                <td style="border-width: 0px; ">
                                    <select name="selectreligion" id="selectreligion">
                                        <option value="#">Seleccione</option>
                                        <option value="1">Catolico</option>
                                        <option value="2">Cristiano</option>
                                        <option value="3">Budista</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; ">RH:</th>
                                <td style="border-width: 0px; "><? echo form_input($Rh); ?>
                                </td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th align="left" style="border-width: 0px; ">Sexo:</th>
                                <td style="border-width: 0px; ">
                                    <select name="selectsexo" id="selectsexo">
                                        <option value="#">Seleccione</option>
                                        <option value="1">Hombre</option>
                                        <option value="2">Mujer</option>
                                        <option value="3">Indefinido</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" rowspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <th align="left" style="border-width: 0px; ">foto</th>
                                <td style="border-width: 0px; ">&nbsp;<? echo form_input($FotoAcu); ?></td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; "></td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; ">Teléfono:</th>
                                <td style="border-width: 0px; "><? echo form_input($TelefonoAcu); ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; ">Dirección Residencia:</th>
                                <td style="border-width: 0px; "><? echo form_input($DirResidenciaAcu); ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; ">Celular:</th>
                                <td colspan="4" style="border-width: 0px; "><? echo form_input($CelularAcu); ?></td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; ">Correo Electronico:</th>
                                <td style="border-width: 0px; "><? echo form_input($CorElectronicoAcu); ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                        </tbody>
                        <?php echo form_close(); ?>
                    </table>
                    <p><br /></p>
                    <p>datoss</p>
                </div>
                <div class="cleared"></div>
            </div>
            <div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
</div>
</div>
</div>
