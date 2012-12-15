<tr><td>
<div class="z-formrow">
    <label for="block_cache_time">{gt text='Cache time (enter positive number in seconds to enable cache)'}</label>
    <input id="block_cache_time" type="text" name="cache_time" size="10" maxlength="50" value="{$cache_time|safetext}" />
</div>
<div class="z-formrow">
    <label for="block_cache_dir">{gt text='Cache directory name (within Zikula Temp directory)'}</label>
    <input id="block_cache_dir" type="text" name="cache_dir" size="30" maxlength="255" value="{$cache_dir|safetext}" />
</div>
<div class="z-formrow">
    <strong>{gt text='Display Last Forum Posts in block'}</strong>
</div>
<div class="z-formrow">
    <label for="block_last_X_posts">{gt text='Number of entries to display'}</label>
    <input id="block_last_X_posts" type="text" name="last_X_posts" value="{$last_X_posts|safehtml}" size="5" maxlength="5" />
</div>
<div class="z-formrow">
    <label for="block_display_date">{gt text='Display Date'}</label>
    <input id="block_display_date" type="checkbox" name="display_date" value="1"{if $display_date} checked="checked"{/if} />
</div>
<div class="z-formrow">
    <label for="block_display_time">{gt text='Display Time'}</label>
    <input id="block_display_time" type="checkbox" name="display_time" value="1"{if $display_time} checked="checked"{/if} />
</div>
<div class="z-formrow">
    <label for="block_group_topics">{gt text='Show only the last post of every topic'}</label>
    <input id="block_group_topics" type="checkbox" name="group_topics" value="1"{if $group_topics} checked="checked"{/if} />
</div>
<div class="z-formrow">
    <label for="block_excluded_forums">{gt text='Do not show posts of the following forums (CTRL+LEFT CLICK sets/clears selections)'}</label>
    <select id="block_excluded_forums" name="excluded_forums[]" size="8" multiple="multiple">
        {foreach from=$forums item='forum'}
        <option value="{$forum.id}"{if $forum.selected} selected="selected"{/if}>{$forum.name|safetext}</option>
		{/foreach}
        </select>
</div>
</td></tr>
