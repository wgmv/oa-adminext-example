[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

<script type="text/javascript">
    <!--
    function editThis( sID )
    {
        var oTransfer = top.basefrm.edit.document.getElementById( "transfer" );
        oTransfer.oxid.value = sID;
        oTransfer.cl.value = top.basefrm.list.sDefClass;

        //forcing edit frame to reload after submit
        top.forceReloadingEditFrame();

        var oSearch = top.basefrm.list.document.getElementById( "search" );
        oSearch.oxid.value = sID;
        oSearch.actedit.value = 0;
        oSearch.submit();
    }
    [{if !$oxparentid}]
    window.onload = function ()
    {
        [{if $updatelist == 1}]
        top.oxid.admin.updateList('[{$oxid}]');
        [{/if}]
        var oField = top.oxid.admin.getLockTarget();
        oField.onchange = oField.onkeyup = oField.onmouseout = top.oxid.admin.unlockSave;
    }
    [{/if}]
    //-->
</script>

[{if $readonly}]
    [{assign var="readonly" value="readonly disabled"}]
[{else}]
    [{assign var="readonly" value=""}]
[{/if}]

<form name="transfer" id="transfer" action="[{$oViewConf->getSelfLink()}]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{$oxid}]">
    <input type="hidden" name="oxidCopy" value="[{$oxid}]">
    <input type="hidden" name="cl" value="oaadminext_example_calc_single">
    <input type="hidden" name="editlanguage" value="[{$editlanguage}]">
</form>

<h1>[{oxmultilang ident="OA_ADMINEXTEXAMPLE"}]</h1>

[{assign var=orderList value=$oView->getOrdersPerDay()}]

[{if $orderList}]
    <table border="1">
        <thead>
            <tr>
                <th>[{oxmultilang ident="GENERAL_DATE"}]</th>
                <th>[{oxmultilang ident="amount"}]</th>
                <th>[{oxmultilang ident="ORDER_ARTICLE_EBRUTTO"}]</th>
            </tr>
        </thead>
        <tbody>
        [{foreach from=$orderList item=order}]
            <tr>
                <td>[{$order->getFieldData('oxorderdate')}]</td>
                <td>[{$order->getFieldData('orderamount')}]</td>
                <td>[{$order->getFieldData('totalbrutsum')}]</td>
            </tr>
        [{/foreach}]
        </tbody>
    </table>
[{/if}]

[{include file="bottomnaviitem.tpl"}]

[{include file="bottomitem.tpl"}]
