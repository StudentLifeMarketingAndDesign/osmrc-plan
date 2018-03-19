<?php include("head.php") ?>
<!-- START BODY -->
<style type="text/css">
<!--
/*--><![CDATA[/* ><!--*/
body{
  -ms-word-break: break-all;
  word-break: break-all;
  word-break: break-word;
}
.l-container {}

.l-footer {
    position: relative;
}

.l-main-container {
    transform: none;
    max-width: 1440px;

}
@media only screen and (min-width: 1140px) {
    .l-main-container {
        margin-top: -120px;       
    }
}
.plan-intro {
    max-width: 800px;
    margin: auto;
    font-size: 18px;
}
@media only screen and (min-width: 768px) {
    .plan-intro {
        padding: 40px 0;      
    }
}
.plan-section {
    max-width: 800px;
    margin: auto;
    padding-bottom: 40px;
    font-size: 18px;
}

.plan-section__container {
    border-top: 1px solid #ddd;
    padding: 40px 0;
}

.plan-section__header {
    
}

.plan-section__table-label {
    
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    background: white;
    padding: 10px 0;
    text-align: center;
    margin-bottom: 15px;
}

@media only screen and (min-width: 768px) {
    .plan-section__table-label {
/*        position: static;
        font-size: 32px;*/
    }
    

}

.plan-sidebar {
    float: right;
    padding: 20px;
    margin: 5px;
    border: 1px solid #eee;
    background-color: #222;
    color: white;
}

.plan-sidebar__link {
    color: #ffd220;
    font-weight: bold;
}

.plan-sidebar__nav {
    margin: 0;
    padding-left: 0;
    list-style-type: none;
}

.plan-table{
    padding: 10px;
}
.plan-table:nth-of-type(2n) {
    background: #efefef;
}

.plan-table__column--large-text{
    font-size: 20px;
}
@media only screen and (min-width: 768px) {
    .plan-table {
        width: 100%;
        display: flex;
        padding: 15px;
    }

    .plan-table__column{
        flex: 50%;
        padding: 10px;
    }
}

.plan-table__timely-updates{
	list-style-type: none;
    padding-left: 20px;
}

.plan-table__timely-updates li:before {    
	font-family: 'FontAwesome';
	content:"";
	margin:0 5px 0 -15px;
	color: #52a271;
}


/* ***************** */


.history-table__container{
    max-width: 800px;
    margin: auto;
}
.history-table__update-list{
    list-style-type: none;
    padding-left: 20px;
}
.history-table__update-list li:before{
    font-family: 'FontAwesome';
    content:"";
    margin:0 5px 0 -15px;
    color: #52a271;
}

.history-table__update-heading{
    display: inline;

}
@media only screen and (min-width: 768px) {
    .history-table {
        width: 100%;
        display: flex;
        padding: 15px;
    }

    .history-table__year-column{
        flex: 20%;
        padding: 10px;
    }
    .history-table__update-column{
        flex: 80%;
        padding: 10px;
    }
    .history-table__heading{
        position: sticky;
        position: -webkit-sticky;
        top: 0;
    }
}



/*--><!]]>*/
</style>

<div class="history-table__container">
    <div class="history-table">
        <div class="history-table__year-column">
            <h2 class="history-table__heading">2006</h2>
        </div>
        <div class="history-table__update-column">
            <ul class="history-table__update-list">
                <li>
                    <h3 class="history-table__update-heading">First Campus Program Grant</h3>
                    <p>$199,668, established CCRT, Implemented mandatory education for incoming students, trained judicial administrators, trained law enforcement, established a men's anti-violence council.</p>
                </li>
                <li><h3 class="history-table__update-heading">CCRT Created - UI Anti-violence Coalition</h3></li>
            </ul>
        </div>
    </div>
    <div class="history-table">
        <div class="history-table__year-column">
            <h2 class="history-table__heading">2007</h2>
        </div>
        <div class="history-table__update-column">
            <ul class="history-table__update-list">
                <li>
                    <h3 class="history-table__update-heading">First Sexual Miscodunct &amp; Dating/Domestic Violence Training</h3>
                    <p>DVIP, RVAP, and DOS collaborate on sexual misconduct &amp; dating/domestic violence training</p>
                </li>
                <li><h3 class="history-table__update-heading">CCRT Created - UI Anti-violence Coalition</h3></li>
            </ul>
        </div>    
    </div>
    <div class="history-table">
        <div class="history-table__year-column">
            <h2 class="history-table__heading">2008</h2>
        </div>
        <div class="history-table__update-column">
            <ul class="history-table__update-list">
                <li>
                    <h3 class="history-table__update-heading">First Sexual Miscodunct Policy</h3>
                    <p>DVIP, RVAP, and DOS collaborate on sexual misconduct &amp; dating/domestic violence training</p>
                </li>
            </ul>
        </div>    
    </div>
    <div class="history-table">
        <div class="history-table__year-column">
            <h2 class="history-table__heading">2009</h2>
        </div>
        <div class="history-table__update-column">
            <ul class="history-table__update-list">
                <li>
                    <h3 class="history-table__update-heading">Created Office of the Sexual Misconduct Response Coordinator</h3>
                </li>
            </ul>
        </div>    
    </div>
    <div class="history-table">
        <div class="history-table__year-column">
            <h2 class="history-table__heading">2010</h2>
        </div>
        <div class="history-table__update-column">
            <ul class="history-table__update-list">
                <li>
                    <h3 class="history-table__update-heading">Created Office of the Sexual Misconduct Response Coordinator</h3>
                </li>
            </ul>
        </div>    
    </div>
</div>
<?php include("foot.php") ?>