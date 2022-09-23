<form>
    <div class="form-field input-nom col-md-12 ">
        <div class="form-label "><label class="inline"> Vous êtes ? </label></div>
        <div class="form-data " data-grav-selectize="[]" data-grav-field="select" data-grav-disabled="true" data-grav-default="null">
            <div class="form-select-wrapper long ">
                <select class=" form-control long">
                    <option value="Particulier">Particulier</option>
                    <option value="Entreprise">Entreprise</option>
                    <option value="Administration">Administration</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-field input-nom col-md-6 ">
        <div class="form-label ">
            <label class="inline"> Nom <span class="required">*</span></label>
        </div>
        <div class="form-data " data-grav-field="text" data-grav-disabled="true" data-grav-default="null">
            <div class="form-input-wrapper ">
                <input name="data[nom]" value="" type="text" class=" form-control" placeholder="Nom*" autocomplete="on" required="required">
            </div>
        </div>
    </div>
    <div class="form-field input-prenom col-md-6 ">
        <div class="form-label ">
            <label class="inline"> Prénom </label>
        </div>
        <div class="form-data " data-grav-field="text" data-grav-disabled="true" data-grav-default="null">
            <div class="form-input-wrapper ">
                <input name="data[prenom]" value="" type="text" class=" form-control" placeholder="Prénom" autocomplete="on">
            </div>
        </div>
    </div>
    <div class="form-field input-prenom col-md-12 ">
        <div class="form-label ">
            <label class="inline"> Société </label>
        </div>
        <div class="form-data " data-grav-field="text" data-grav-disabled="true" data-grav-default="null">
            <div class="form-input-wrapper ">
                <input name="data[societe]" value="" type="text" class=" form-control" placeholder="Société" autocomplete="on">
            </div>
        </div>
    </div>
    <div class="form-field input-phone col-md-6 ">
        <div class="form-label ">
            <label class="inline"> Numéro de téléphone <span class="required">*</span></label>
        </div>
        <div class="form-data " data-grav-field="tel" data-grav-disabled="true" data-grav-default="null">
            <div class="form-input-wrapper ">
                <input name="data[phone]" value="" type="tel" class=" form-control" placeholder="Téléphone*" autocomplete="on" required="required">
            </div>
        </div>
    </div>
    <div class="form-field input-email col-md-6 ">
        <div class="form-label ">
            <label class="inline"> Email <span class="required">*</span></label>
        </div>
        <div class="form-data " data-grav-field="email" data-grav-disabled="true" data-grav-default="null">
            <div class="form-input-wrapper ">
                <input name="data[email]" value="" type="email" class=" form-control" placeholder="Email*" required="required">
                </div>
            </div>
        </div>
        <div class="form-field col-md-6 ">
            <div class="form-label ">
                <label class="inline"> Code Postal </label>
            </div>
            <div class="form-data " data-grav-field="number" data-grav-disabled="true" data-grav-default="null">
                <div class="form-input-wrapper ">
                    <input name="data[postal_code]" value="" type="number" class=" form-control" placeholder="Code Postal">
                </div>
            </div>
        </div>
        <div class="form-field col-md-6 ">
            <div class="form-label ">
                <label class="inline"> Ville <span class="required">*</span></label>
            </div>
                <div class="form-data " data-grav-field="text" data-grav-disabled="true" data-grav-default="null">
                    <div class="form-input-wrapper ">
                        <input name="data[ville]" value="" type="text" class=" form-control" placeholder="Ville" required="required">
                    </div>
                </div>
            </div>
            <div class="form-field col-md-6 ">
                <div class="form-label ">
                    <label class="inline"> Sujet <span class="required">*</span></label>
                </div>
                <div class="form-data " data-grav-field="text" data-grav-disabled="true" data-grav-default="null">
                    <div class="form-input-wrapper ">
                        <input name="data[sujet]" value="" type="text" class=" form-control" placeholder="Sujet" required="required"></div>
                    </div>
                </div>
                <div class="form-field input-demande col-md-12 ">
                    <div class="form-label ">
                        <label class="inline"> Message <span class="required">*</span></label>
                    </div>
                    <div class="form-data " data-grav-field="textarea" data-grav-disabled="true" data-grav-default="null">
                        <div class="form-textarea-wrapper ">
                            <textarea name="data[message]" class=" form-control " placeholder="Message" required="required"></textarea>
                        </div>
                    </div>
                </div>
                <div style="display:none!important">
                    <div class="form-field input-file col-md-6 ">
                        <div class="form-label ">
                            <label class="inline"> Pieces-jointes </label>
                        </div>
                        <div class="form-data " data-grav-field="file" data-grav-disabled="true" data-grav-default="null">
                            <div class="form-input-wrapper form-control dropzone files-upload form-input-file dz-clickable" data-grav-file-settings="{&quot;name&quot;:&quot;pieces-jointes&quot;,&quot;paramName&quot;:&quot;data[pieces-jointes]&quot;,&quot;limit&quot;:1,&quot;filesize&quot;:8,&quot;accept&quot;:[&quot;*&quot;],&quot;resolution&quot;:null,&quot;resizeWidth&quot;:null,&quot;resizeHeight&quot;:null,&quot;resizeQuality&quot;:null}" data-dropzone-options="null" data-file-url-add="/menage-a-domicile-chez-un-particulier-a-saint-ouen.json/task:file-upload">
                                <input type="file" accept="*" class=" form-control">
                                <input data-grav-field="hidden" data-grav-disabled="false" type="hidden" class="input" name="data[_json][pieces-jointes]" value="[]">
                                <div class="dz-default dz-message">
                                    <span>Déposez vos fichiers ici ou cliquez dans cette zone</span>
                                </div>
                            </div>
                            <link href="/assets/1505c0879705495db18e2dc4d72d5a79.css?g-4e521957" type="text/css" rel="stylesheet">
                        </div>
                    </div>
                </div>
                    <div class="form-field form-captcha col-md-6 ">
                        <div class="form-label ">
                            <label class="inline"></label>
                        </div>
                    </div>
                    <div class="form-field input-demande col-md-12 ">
                        <div class="form-label ">
                            <label class="inline"></label>
                        </div>
                    </div>
                    <input type="hidden" name="__form-name__" value="contact-form">
                    <div class="buttons">
                        <button class="button btn btn-primary btn-lg" type="submit"> ENVOYER </button>
                    </div>
</form>