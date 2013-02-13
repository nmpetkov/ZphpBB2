{if (isset($objectArray.ZphpBB2) && $objectArray.ZphpBB2)}

{gt text="Latest Forum Posts"}
===========================
{foreach from=$objectArray.ZphpBB2 item="item"}
{$item.topic_title}
{$item.forum_name}, {$item.username}
{$item.post_text|safehtml|url_check|truncate:400}
{/foreach}
{/if}
