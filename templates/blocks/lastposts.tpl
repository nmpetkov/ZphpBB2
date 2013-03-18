<ul style="white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">
    {foreach from=$items item=item}
    <li>
        <a class="z-normal" href="{modurl modname='ZphpBB2' type='user' func='viewtopic' p=$item.post_id|cat:'#':$item.post_id}" title="{gt text='Goto post'}">
        <img style="display:inline;" src="{$item.replyicon}" alt="{gt text='Goto post'}" />
        {$item.topic_title|strip_tags:false|truncate:60|safetext}
        <br />
        {gt text='by'} {$item.post_username|safetext}
        {* &nbsp;({$item.post_replies}) *}
        {if $display_date or $display_time}
            {if $display_date}
                {gt text='on'} {$item.post_time|dateformat}
            {/if}
            {if $display_time}
                {gt text='at'} {$item.post_time|dateformat:'%H:%M'}
            {/if}
        {/if}
        </a>
    </li>
    {/foreach}
</ul>
