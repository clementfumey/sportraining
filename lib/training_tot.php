<form name ="add" id="add" action="/sportraining/addtrainingfct" method="post">  

    <?php
    $rep_sport = mysql_query('SELECT Sport FROM sport');
    echo'<select name="sport" size="1" id="sport">';
    while ($sport = mysql_fetch_array($rep_sport)) {
        ?>     
        <table width ="100%">
            <tr>
                <td width="50%">
            <option value="<?php echo $sport['Sport']; ?>"><?php echo $sport['Sport']; ?></option>     
            <p>
                <?php
            }
            echo'</select>';
            ?></p>
        <p>Type : <br />
            <?php
            $rep_type = mysql_query('SELECT Filiere FROM type');
            echo'<select name="type" size="1" id="type">';
            while ($type = mysql_fetch_array($rep_type)) {
                ?>
            <option value="<?php echo $type['Filiere']; ?>"><?php echo $type['Filiere']; ?></option>
                <?php
            }
            echo'</select>';
            ?>
        </p>
        <p>Contenu : <br />
            <span id="sprytextarea2">
                <textarea name="contenu"></textarea>
                <span class="textareaRequiredMsg">Une valeur est requise.</span></span><br />
            </td>
        <td>
            Date : (format: aaaa-mm-jj) <br />
            <input type="text" readonly name="date"  <?php if (isset($date_url_sql)) echo 'value="' . $date_url_sql->format('Y/m/d') . '"'; else echo "value=\"" . date("Y/m/d") . "\" onClick=\"displayCalendar(this,'yyyy/mm/dd', this)\" "; ?>/>
            <br />
            <br />
            Duree : <br />
            <span id="duree">
                <input type="text" name="duree"/>
                <span class="textfieldRequiredMsg">Une valeur est requise.</span><span class="textfieldInvalidFormatMsg">Format non valide.</span></span><br />
            <br />
            Difficulte : <br />
            <label for="difficulte"></label>
            <select name="difficulte" id="difficulte">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
            <br />
        </td>
        </tr>
    </table>

    <table width ="100%">

        <tr>
            <td width="50%">
                Fcmoy : <br />
                <span id="fcmoy">
                    <input class="input-mini" type="text" name="fcmoy"/>
                    <span class="textfieldRequiredMsg">Une valeur est requise.</span><span class="textfieldInvalidFormatMsg">Format non valide.</span></span><br />
                <br />
                Comments : <br />
                <span id="comments">
                    <textarea name="comments"></textarea>
                    <span class="textareaRequiredMsg">Une valeur est requise.</span></span></p>
                <p>Distance :<br />
                    <span id="distance">
                        <input class="input-mini"  type="text" name="distance" id="distance"/>
                        <span class="textfieldInvalidFormatMsg">Format non valide.</span></span><br />
                    <br />
            </td>
            <td valign="top" 		align="center">
                <table>
                    <tr>
                        <td align="center">
                            <p>Z1<br />
                                <span id="z1">
                                    <input class="input-mini" type="text" size="3px" name="z1" id="z1" value ="0" onChange="maj(this.value)"/>
                                    <span class="textfieldInvalidFormatMsg">Format non valide.</span></span><br />

                        </td>
                        <td align="center">
                            <p>Z2<br />
                                <span id="z2">
                                    <input class="input-mini" type="text" size="3px" name="z2" id="z2" value ="0" onChange="maj(this.value)"/>
                                    <span class="textfieldInvalidFormatMsg">Format non valide.</span></span><br />

                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <p>Z3<br />
                                <span id="z3">
                                    <input class="input-mini" type="text" size="3px" name="z3" id="z3" value ="0" onChange="maj(this.value)"/>
                                    <span class="textfieldInvalidFormatMsg">Format non valide.</span></span><br />

                        </td>
                        <td align="center">
                            <p>Z4<br />
                                <span id="z4">
                                    <input class="input-mini" type="text" size="3px" name="z4" id="z4" value ="0" onChange="maj(this.value)"/>
                                    <span class="textfieldInvalidFormatMsg">Format non valide.</span></span><br />

                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <p>Z5<br />
                                <span id="z5">
                                    <input class="input-mini" type="text" size="3px" name="z5" id="z5" value ="0" onChange="maj(this.value)"/>
                                    <span class="textfieldInvalidFormatMsg">Format non valide.</span></span><br />
                        </td>
                        <td align="center">
                            <p>Charge<br />
                                <input class="input-mini" type="text" size="3px" name="charge" id="charge" readonly="readonly"/>
                        </td>
                    </tr>
            </td>
        </tr>
    </table>
</table>

<input type="submit" value="Valider" />
</p>
</form>	
<div class="comments"></div>
</div>

<script type="text/javascript">
    var sprytextfield1 = new Spry.Widget.ValidationTextField("duree", "real", {validateOn:["change"]});
    var z2 = new Spry.Widget.ValidationTextField("z2", "integer", {validateOn:["change"]});
    var z1 = new Spry.Widget.ValidationTextField("z1", "integer", {validateOn:["change"]});
    var z3 = new Spry.Widget.ValidationTextField("z3", "integer", {validateOn:["change"]});
    var z4 = new Spry.Widget.ValidationTextField("z4", "integer", {validateOn:["change"]});
    var z5 = new Spry.Widget.ValidationTextField("z5", "integer", {validateOn:["change"]});
    var z5 = new Spry.Widget.ValidationTextField("fcmoy", "integer", {validateOn:["change"]});
    var z5 = new Spry.Widget.ValidationTextField("duree", "integer", {validateOn:["change"]});
    var sprytextarea1 = new Spry.Widget.ValidationTextarea("comments");
    var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2");
    var sprytextfield3 = new Spry.Widget.ValidationTextField("distance", "real", {validateOn:["change"], isRequired:false});

</script>
<script type="text/javascript">
    function maj(value) {	
        if (isNaN(parseFloat(value)) == false) { 
            var charge = document.add.z1.value *1.25 +document.add.z2.value*2+document.add.z3.value*3+document.add.z4.value*4.5+document.add.z5.value*7;
        } else var charge = 0;
		
        document.add.charge.value=charge;
		
    }
    maj();	
</script> 
