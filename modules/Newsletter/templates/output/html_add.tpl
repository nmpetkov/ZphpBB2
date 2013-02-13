
                    {if (isset($objectArray.ZphpBB2) && $objectArray.ZphpBB2)}        
                      <h2>{gt text="Latest Forum Posts"}</h2>
                      <img class="hr" src="{$site_url}modules/Newsletter/images/newsletter_images/hr.gif" alt="Newsletter" width="560" height="3" />
                      {foreach from=$objectArray.ZphpBB2 item="item" name="loop"}
                        <h3><a href="{$item.posturl}">{$item.topic_title}</a></h3>
                        <p>{$item.forum_name}, {$item.username}<br />
                        {$item.post_text|safehtml|url_check|truncate:400}</p>
                        <p class="more"><a href="{$item.posturl}">{gt text="read more"}</a> <img src="{$site_url}modules/Newsletter/images/newsletter_images/read-more.gif" alt="Header" width="8" height="8" /></p>
                        {if (!$smarty.foreach.loop.last)}<img class="hr" src="{$site_url}modules/Newsletter/images/newsletter_images/hr-small.gif" alt="Newsletter" width="560" height="2" />{/if}
                      {/foreach}
                      <br />
                    {/if}
