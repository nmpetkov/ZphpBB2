<ul style="white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">
    {foreach from=$items item=item}
    <li>
        <a class="z-normal" href="{$link_url}viewtopic&amp;p={$item.post_id}#{$item.post_id}" title="{ml name=_GOTO_POST}">
        <img style="display:inline;" src="{$phpbb_root_path}pnimages/{$item.replyicon}.gif" alt="{ml name=_GOTO_POST}" />
        {$item.topic_title|strip_tags:false|truncate:60|safetext}
        <br />
        {ml name=_POST_BY} {$item.post_username|safetext}
        {* &nbsp;({$item.post_replies}) *}
        {if $display_date or $display_time}
            {if $display_date}
                {ml name=_POST_ON} {$item.post_time|dateformat}
            {/if}
            {if $display_time}
                {ml name=_POST_AT} {$item.post_time|dateformat:'%H:%M'}
            {/if}
        {/if}
        </a>
    </li>
    {/foreach}
</ul>
