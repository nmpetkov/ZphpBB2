{adminheader}
<div class="z-admin-content-pagetitle">
    {icon type="config" size="small"}
    <h3>{gt text='Module settings'}</h3>
</div>

<form class="z-form" action="{modurl modname="ZphpBB2" type="admin" func="updateconfig"}" method="post" enctype="application/x-www-form-urlencoded">
    <div>
    <input type="hidden" name="csrftoken" value="{insert name="csrftoken"}" />
    <fieldset>
        <legend>{gt text='General settings'}</legend>
        <div class="z-formrow">
            <label for="table_prefix">{gt text='Table prefix'}</label>
            <input id="table_prefix" type="text" name="table_prefix" size="3" value="{$table_prefix|safetext}" />
            <em class="z-sub z-formnote">{gt text='This will change module table prefix in database. Must contain <b>phpbb</b>.'}</em>
        </div>
    </fieldset>
    <fieldset>
        <legend>{gt text='Forum SEO metatags'}</legend>
        <div class="z-informationmsg nl-round">
            {gt text='This information is for SEO and are metatags inserted in head section of generated HTML.'}
        </div>
        <div class="z-formrow">
            <label for="page_title">{gt text='Page title'}</label>
            <input id="page_title" type="text" name="page_title" value="{$page_title|safetext}" />
        </div>
        <div class="z-formrow">
            <label for="page_description">{gt text='Page description'}</label>
            <input id="page_description" type="text" name="page_description" value="{$page_description|safetext}" />
        </div>
        <div class="z-formrow">
            <label for="page_robots">{gt text='Robots'}</label>
            <input id="page_robots" type="text" name="page_robots" value="{$page_robots|safetext}" />
            <em class="z-sub z-formnote">{gt text='To index: <i>index, follow</i>, to prevent indexing: <i>noindex, nofollow, noarchive</i>'}</em>
        </div>
    </fieldset>
    <div class="z-buttons z-formbuttons">
        {button src="button_ok.png" set="icons/extrasmall" __alt="Save" __title="Save" __text="Save"}
        <a href="{modurl modname="ZphpBB2" type="admin" func='modifyconfig'}" title="{gt text="Cancel"}">{img modname=core src="button_cancel.png" set="icons/extrasmall" __alt="Cancel" __title="Cancel"} {gt text="Cancel"}</a>
    </div>
    </div>
</form>
{adminfooter}