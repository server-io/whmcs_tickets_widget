<table class="table">
    <tr>
        <th>Last update</th>
        <th>Subject</th>
        <th>Client</th>
        <th>Department</th>
        <th>Status</th>
        <th>Priority</th>
    </tr>
    {if count($tickets)}
        {foreach from=$tickets item=ticket}
        <tr>
            <td>{$ticket.lastreply}</td>
            <td>
                <a href="supporttickets.php?action=view&id={$ticket.id}">{$ticket.tid} - {$ticket.subject}</a>
            </td>
            <td>
                <a href="clientssummary.php?userid={$ticket.userid}">{$ticket.name}</a>
            </td>
            <td>{$ticket.deptname}</td>
            <td>{$ticket.status}</td>
            <td>{$ticket.priority}</td>
        </tr>
        {/foreach}
    {else}
        <tr>
            <td colspan="7" style="text-align:center;">No awaiting reply tickets</td>
        </tr>
    {/if}
</table>
