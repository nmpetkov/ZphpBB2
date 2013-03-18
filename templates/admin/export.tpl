{adminheader}
<div class="z-admin-content-pagetitle">
    {icon type="config" size="small"}
    <h3>{gt text='Export'}</h3>
</div>

<form class="z-form" action="{modurl modname="ZphpBB2" type="admin" func="export_perform"}" method="post" enctype="application/x-www-form-urlencoded">
    <div>
    <input type="hidden" name="csrftoken" value="{insert name="csrftoken"}" />
    <fieldset>
        <legend>{gt text='Export to Dizkus'}</legend>
        <div class="z-formrow">
            <label for="destination">Not yet</label>
            <input id="destination" type="text" name="destination" size="3" value="" />
            <em class="z-sub z-formnote">'Not yet</em>
        </div>
    </fieldset>
    <div class="z-buttons z-formbuttons">
        {button src="button_ok.png" set="icons/extrasmall" __alt="Export" __title="Export" __text="Export"}
        <a href="{modurl modname="ZphpBB2" type="admin" func='export'}" title="{gt text="Cancel"}">{img modname=core src="button_cancel.png" set="icons/extrasmall" __alt="Cancel" __title="Cancel"} {gt text="Cancel"}</a>
    </div>
    </div>
</form>
{adminfooter}