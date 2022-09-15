@extends('layouts.frontend')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
    <h1 style="color: white;">Balance</h1>
        <h5 style="color: white;">$0000.1</h5>
            </div>
         <div class="col-6">
          <form action="" method="post">
              <div style="float: right;"><a href="#" class="btn-2">Mine Now</a></div> 
          </form>
        </div>
    </div>
<div class="row sm-gutters mt-4">
  <!----div class="col-md-3">
    <div class="market-pairs">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-sm"><i class="icon ion-md-search"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Search" aria-describedby="inputGroup-sizing-sm">
      </div>
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#STAR" role="tab" aria-selected="true"><i
              class="icon ion-md-star"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" data-toggle="pill" href="#BTC" role="tab" aria-selected="true">BTC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#ETH" role="tab" aria-selected="false">ETH</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#NEO" role="tab" aria-selected="false">NEO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#USDT" role="tab" aria-selected="false">USDT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#DAI" role="tab" aria-selected="false">DAI</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show" id="STAR" role="tabpanel">
          <table class="table">
            <thead>
              <tr>
                <th>Pairs</th>
                <th>Last Price</th>
                <th>Change</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><i class="icon ion-md-star"></i> ETH/BTC</td>
                <td>0.00020255</td>
                <td class="red">-2.58%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> KCS/BTC</td>
                <td>0.00013192</td>
                <td class="green">+5.6%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XRP/BTC</td>
                <td>0.00002996</td>
                <td class="red">-1.55%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> VET/BTC</td>
                <td>0.00000103</td>
                <td class="green">+1.8%</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade show active" id="BTC" role="tabpanel">
          <table class="table">
            <thead>
              <tr>
                <th>Pairs</th>
                <th>Last Price</th>
                <th>Change</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><i class="icon ion-md-star"></i> ETH/BTC</td>
                <td>0.00020255</td>
                <td class="red">-2.58%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> KCS/BTC</td>
                <td>0.00013192</td>
                <td class="green">+5.6%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XRP/BTC</td>
                <td>0.00002996</td>
                <td class="red">-1.55%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> VET/BTC</td>
                <td>0.00000103</td>
                <td class="green">+1.8%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> EOS/BTC</td>
                <td>0.00000103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BTT/BTC</td>
                <td>0.00002303</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> LTC/BTC</td>
                <td>0.03520103</td>
                <td class="green">+1.5%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> TRX/BTC</td>
                <td>0.00330103</td>
                <td class="red">-3.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BSV/BTC</td>
                <td>0.00300103</td>
                <td class="green">+2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> COTI/BTC</td>
                <td>0.003500103</td>
                <td class="green">+2.85%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XYT/BTC</td>
                <td>0.00003103</td>
                <td class="green">+3.55%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BNB/BTC</td>
                <td>0.003500103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XMR/BTC</td>
                <td>0.003500103</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> TRY/BTC</td>
                <td>0.00000123</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> ADA/BTC</td>
                <td>0.00050103</td>
                <td class="green">+5.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> NEO/BTC</td>
                <td>0.00340103</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XLM/BTC</td>
                <td>0.00035103</td>
                <td class="green">+5.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> ENQ/BTC</td>
                <td>0.00354103</td>
                <td class="green">+2.02%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> AVA/BTC</td>
                <td>0.02535103</td>
                <td class="green">+3.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> AMB/BTC</td>
                <td>0.05335103</td>
                <td class="green">+1.0%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> MAP/BTC</td>
                <td>0.00234103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> GO/BTC</td>
                <td>0.00354103</td>
                <td class="red">-6.50%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> KICK/BTC</td>
                <td>0.02053103</td>
                <td class="red">-6.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> DBC/BTC</td>
                <td>0.02535103</td>
                <td class="green">+7.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> GGC/BTC</td>
                <td>0.00353103</td>
                <td class="red">-4.05%</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade show" id="ETH" role="tabpanel">
          <table class="table">
            <thead>
              <tr>
                <th>Pairs</th>
                <th>Last Price</th>
                <th>Change</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><i class="icon ion-md-star"></i> BTC/ETH</td>
                <td>0.00020255</td>
                <td class="green">+1.58%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> KCS/ETH</td>
                <td>0.00013192</td>
                <td class="red">-0.6%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XRP/ETH</td>
                <td>0.00002996</td>
                <td class="red">-0.55%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> VET/ETH</td>
                <td>0.00000103</td>
                <td class="green">+1.8%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> EOS/ETH</td>
                <td>0.00000103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BTT/ETH</td>
                <td>0.00002303</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> LTC/ETH</td>
                <td>0.03520103</td>
                <td class="green">+1.5%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> TRX/ETH</td>
                <td>0.00330103</td>
                <td class="red">-3.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BSV/ETH</td>
                <td>0.00300103</td>
                <td class="green">+2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> COTI/ETH</td>
                <td>0.003500103</td>
                <td class="green">+2.85%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XYT/ETH</td>
                <td>0.00003103</td>
                <td class="green">+3.55%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BNB/ETH</td>
                <td>0.003500103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XMR/ETH</td>
                <td>0.003500103</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> TRY/ETH</td>
                <td>0.00000123</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> ADA/ETH</td>
                <td>0.00050103</td>
                <td class="green">+5.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> NEO/ETH</td>
                <td>0.00340103</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XLM/ETH</td>
                <td>0.00035103</td>
                <td class="green">+5.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> ENQ/ETH</td>
                <td>0.00354103</td>
                <td class="green">+2.02%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> AVA/ETH</td>
                <td>0.02535103</td>
                <td class="green">+3.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> AMB/ETH</td>
                <td>0.05335103</td>
                <td class="green">+1.0%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> MAP/ETH</td>
                <td>0.00234103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> GO/ETH</td>
                <td>0.00354103</td>
                <td class="red">-6.50%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> KICK/ETH</td>
                <td>0.02053103</td>
                <td class="red">-6.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> DBC/ETH</td>
                <td>0.02535103</td>
                <td class="green">+7.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> GGC/ETH</td>
                <td>0.00353103</td>
                <td class="red">-4.05%</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade show" id="NEO" role="tabpanel">
          <table class="table">
            <thead>
              <tr>
                <th>Pairs</th>
                <th>Last Price</th>
                <th>Change</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><i class="icon ion-md-star"></i> ETH/NEO</td>
                <td>0.00350255</td>
                <td class="red">-6.58%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> KCS/NEO</td>
                <td>0.00013192</td>
                <td class="green">+0.6%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XRP/NEO</td>
                <td>0.00002996</td>
                <td class="red">-0.55%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> VET/NEO</td>
                <td>0.00000103</td>
                <td class="green">+1.8%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> EOS/NEO</td>
                <td>0.00000103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BTT/NEO</td>
                <td>0.00002303</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> LTC/NEO</td>
                <td>0.03520103</td>
                <td class="green">+1.5%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> TRX/NEO</td>
                <td>0.00330103</td>
                <td class="red">-3.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BSV/NEO</td>
                <td>0.00300103</td>
                <td class="green">+2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> COTI/NEO</td>
                <td>0.003500103</td>
                <td class="green">+2.85%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XYT/NEO</td>
                <td>0.00003103</td>
                <td class="green">+3.55%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BNB/NEO</td>
                <td>0.003500103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XMR/NEO</td>
                <td>0.003500103</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> TRY/NEO</td>
                <td>0.00000123</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> ADA/NEO</td>
                <td>0.00050103</td>
                <td class="green">+5.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> NEO/NEO</td>
                <td>0.00340103</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XLM/NEO</td>
                <td>0.00035103</td>
                <td class="green">+5.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> ENQ/NEO</td>
                <td>0.00354103</td>
                <td class="green">+2.02%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> AVA/NEO</td>
                <td>0.02535103</td>
                <td class="green">+3.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> AMB/NEO</td>
                <td>0.05335103</td>
                <td class="green">+1.0%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> MAP/NEO</td>
                <td>0.00234103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> GO/NEO</td>
                <td>0.00354103</td>
                <td class="red">-6.50%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> KICK/NEO</td>
                <td>0.02053103</td>
                <td class="red">-6.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> DBC/NEO</td>
                <td>0.02535103</td>
                <td class="green">+7.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> GGC/NEO</td>
                <td>0.00353103</td>
                <td class="red">-4.05%</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade show" id="USDT" role="tabpanel">
          <table class="table">
            <thead>
              <tr>
                <th>Pairs</th>
                <th>Last Price</th>
                <th>Change</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><i class="icon ion-md-star"></i> ETH/USDT</td>
                <td>0.00350255</td>
                <td class="red">-2.58%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> KCS/USDT</td>
                <td>0.00013192</td>
                <td class="green">+6.6%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XRP/USDT</td>
                <td>0.00002996</td>
                <td class="red">-0.55%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> VET/USDT</td>
                <td>0.00000103</td>
                <td class="green">+1.8%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> EOS/USDT</td>
                <td>0.00000103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BTT/USDT</td>
                <td>0.00002303</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> LTC/USDT</td>
                <td>0.03520103</td>
                <td class="green">+1.5%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> TRX/USDT</td>
                <td>0.00330103</td>
                <td class="red">-3.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BSV/USDT</td>
                <td>0.00300103</td>
                <td class="green">+2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> COTI/USDT</td>
                <td>0.003500103</td>
                <td class="green">+2.85%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XYT/USDT</td>
                <td>0.00003103</td>
                <td class="green">+3.55%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BNB/USDT</td>
                <td>0.003500103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XMR/USDT</td>
                <td>0.003500103</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> TRY/USDT</td>
                <td>0.00000123</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> ADA/USDT</td>
                <td>0.00050103</td>
                <td class="green">+5.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> USDT/USDT</td>
                <td>0.00340103</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XLM/USDT</td>
                <td>0.00035103</td>
                <td class="green">+5.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> ENQ/USDT</td>
                <td>0.00354103</td>
                <td class="green">+2.02%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> AVA/USDT</td>
                <td>0.02535103</td>
                <td class="green">+3.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> AMB/USDT</td>
                <td>0.05335103</td>
                <td class="green">+1.0%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> MAP/USDT</td>
                <td>0.00234103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> GO/USDT</td>
                <td>0.00354103</td>
                <td class="red">-6.50%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> KICK/USDT</td>
                <td>0.02053103</td>
                <td class="red">-6.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> DBC/USDT</td>
                <td>0.02535103</td>
                <td class="green">+7.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> GGC/USDT</td>
                <td>0.00353103</td>
                <td class="red">-4.05%</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade show" id="DAI" role="tabpanel">
          <table class="table">
            <thead>
              <tr>
                <th>Pairs</th>
                <th>Last Price</th>
                <th>Change</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><i class="icon ion-md-star"></i> ETH/DAI</td>
                <td>0.05320255</td>
                <td class="green">+6.58%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> KCS/DAI</td>
                <td>0.00013192</td>
                <td class="green">+0.6%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XRP/DAI</td>
                <td>0.00002996</td>
                <td class="red">-0.55%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> VET/DAI</td>
                <td>0.00000103</td>
                <td class="green">+1.8%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> EOS/DAI</td>
                <td>0.00000103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BTT/DAI</td>
                <td>0.00002303</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> LTC/DAI</td>
                <td>0.03520103</td>
                <td class="green">+1.5%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> TRX/DAI</td>
                <td>0.00330103</td>
                <td class="red">-3.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BSV/DAI</td>
                <td>0.00300103</td>
                <td class="green">+2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> COTI/DAI</td>
                <td>0.003500103</td>
                <td class="green">+2.85%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XYT/DAI</td>
                <td>0.00003103</td>
                <td class="green">+3.55%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> BNB/DAI</td>
                <td>0.003500103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XMR/DAI</td>
                <td>0.003500103</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> TRY/DAI</td>
                <td>0.00000123</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> ADA/DAI</td>
                <td>0.00050103</td>
                <td class="green">+5.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> DAI/DAI</td>
                <td>0.00340103</td>
                <td class="red">-1.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> XLM/DAI</td>
                <td>0.00035103</td>
                <td class="green">+5.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> ENQ/DAI</td>
                <td>0.00354103</td>
                <td class="green">+2.02%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> AVA/DAI</td>
                <td>0.02535103</td>
                <td class="green">+3.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> AMB/DAI</td>
                <td>0.05335103</td>
                <td class="green">+1.0%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> MAP/DAI</td>
                <td>0.00234103</td>
                <td class="red">-2.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> GO/DAI</td>
                <td>0.00354103</td>
                <td class="red">-6.50%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> KICK/DAI</td>
                <td>0.02053103</td>
                <td class="red">-6.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> DBC/DAI</td>
                <td>0.02535103</td>
                <td class="green">+7.05%</td>
              </tr>
              <tr>
                <td><i class="icon ion-md-star"></i> GGC/DAI</td>
                <td>0.00353103</td>
                <td class="red">-4.05%</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div--->
  <div class="col-md-12">
    <div class="main-chart mb15">
      <!-- TradingView Widget BEGIN -->
      <div class="tradingview-widget-container">
        <div id="tradingview_e8053"><div id="tradingview_ea556-wrapper" style="position: relative;box-sizing: content-box;width: 100%;height: 550px;margin: 0 auto !important;padding: 0 !important;font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif;"><div style="width: 100%;height: 550px;background: transparent;padding: 0 !important;"><iframe id="tradingview_ea556" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_ea556&amp;symbol=BITSTAMP%3ABTCUSD&amp;interval=D&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;theme=Dark&amp;style=1&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;showpopupbutton=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;showpopupbutton=1&amp;locale=en&amp;utm_source=&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=BITSTAMP%3ABTCUSD" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe></div></div></div>
        <script async="" src="https://embed.tawk.to/62eb883437898912e9612e48/1g9k0o42k" charset="UTF-8" crossorigin="*"></script><script src="./tradingview/tv.js"></script>
        <script>
          new TradingView.widget(
            {
              "width": "100%",
              "height": 550,
              "symbol": "BITSTAMP:BTCUSD",
              "interval": "D",
              "timezone": "Etc/UTC",
              "theme": "Dark",
              "style": "1",
              "locale": "en",
              "toolbar_bg": "#f1f3f6",
              "enable_publishing": false,
              "withdateranges": true,
              "hide_side_toolbar": false,
              "allow_symbol_change": true,
              "show_popup_button": true,
              "popup_width": "1000",
              "popup_height": "650",
              "container_id": "tradingview_e8053"
            }
          );
        </script>
      </div>
      <!-- TradingView Widget END -->
    </div>
   
  </div>
  <!---div class="col-md-3">
    <div class="order-book mb15">
      <h2 class="heading">Order Book</h2>
      <table class="table">
        <thead>
          <tr>
            <th>Price(BTC)</th>
            <th>Amount(ETH)</th>
            <th>Total(ETH)</th>
          </tr>
        </thead>
        <tbody>
          <tr class="red-bg-80">
            <td class="red">0.022572</td>
            <td>1.253415</td>
            <td>15.27648</td>
          </tr>
          <tr class="red-bg-60">
            <td class="red">0.020371</td>
            <td>1.205415</td>
            <td>15.25648</td>
          </tr>
          <tr class="red-bg-40">
            <td class="red">0.023572</td>
            <td>1.645415</td>
            <td>15.23648</td>
          </tr>
          <tr class="red-bg-20">
            <td class="red">0.032378</td>
            <td>1.206715</td>
            <td>15.25348</td>
          </tr>
          <tr class="red-bg-10">
            <td class="red">0.022573</td>
            <td>1.262415</td>
            <td>15.19648</td>
          </tr>
          <tr class="red-bg-8">
            <td class="red">0.154377</td>
            <td>1.225415</td>
            <td>15.35648</td>
          </tr>
          <tr class="red-bg-5">
            <td class="red">0.120373</td>
            <td>1.285415</td>
            <td>15.25648</td>
          </tr>
          <tr class="red-bg">
            <td class="red">0.028576</td>
            <td>1.291415</td>
            <td>15.26448</td>
          </tr>
        </tbody>
        <tbody class="ob-heading">
          <tr>
            <td>
              <span>Last Price</span>
              0.020367
            </td>
            <td>
              <span>USD</span>
              148.65
            </td>
            <td class="red">
              <span>Change</span>
              -0.51%
            </td>
          </tr>
        </tbody>
        <tbody>
          <tr class="green-bg">
            <td class="green">0.158373</td>
            <td>1.209515</td>
            <td>15.23248</td>
          </tr>
          <tr class="green-bg-5">
            <td class="green">0.020851</td>
            <td>1.206245</td>
            <td>15.25458</td>
          </tr>
          <tr class="green-bg-8">
            <td class="green">0.025375</td>
            <td>1.205715</td>
            <td>15.65648</td>
          </tr>
          <tr class="green-bg-10">
            <td class="green">0.020252</td>
            <td>1.205495</td>
            <td>15.24548</td>
          </tr>
          <tr class="green-bg-20">
            <td class="green">0.020373</td>
            <td>1.205415</td>
            <td>15.25648</td>
          </tr>
          <tr class="green-bg-40">
            <td class="green">0.020156</td>
            <td>1.207515</td>
            <td>15.28948</td>
          </tr>
          <tr class="green-bg-60">
            <td class="green">0.540375</td>
            <td>1.205915</td>
            <td>15.25748</td>
          </tr>
          <tr class="green-bg-80">
            <td class="green">0.020372</td>
            <td>1.205415</td>
            <td>15.25648</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="market-history">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="pill" href="#recent-trades" role="tab" aria-selected="true">Recent
            Trades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#market-depth" role="tab" aria-selected="false">Market
            Depth</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="recent-trades" role="tabpanel">
          <table class="table">
            <thead>
              <tr>
                <th>Time</th>
                <th>Price(BTC)</th>
                <th>Amount(ETH)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>13:03:53</td>
                <td class="red">0.020191</td>
                <td>0.2155045</td>
              </tr>
              <tr>
                <td>13:03:53</td>
                <td class="green">0.020191</td>
                <td>0.2155045</td>
              </tr>
              <tr>
                <td>13:03:53</td>
                <td class="green">0.020191</td>
                <td>0.2155045</td>
              </tr>
              <tr>
                <td>13:03:53</td>
                <td class="red">0.020191</td>
                <td>0.2155045</td>
              </tr>
              <tr>
                <td>13:03:53</td>
                <td class="green">0.020191</td>
                <td>0.2155045</td>
              </tr>
              <tr>
                <td>13:03:53</td>
                <td class="green">0.020191</td>
                <td>0.2155045</td>
              </tr>
              <tr>
                <td>13:03:53</td>
                <td class="green">0.020191</td>
                <td>0.2155045</td>
              </tr>
              <tr>
                <td>13:03:53</td>
                <td class="red">0.020191</td>
                <td>0.2155045</td>
              </tr>
              <tr>
                <td>13:03:53</td>
                <td class="red">0.020191</td>
                <td>0.2155045</td>
              </tr>
              <tr>
                <td>13:03:53</td>
                <td class="green">0.020191</td>
                <td>0.2155045</td>
              </tr>
              <tr>
                <td>13:03:53</td>
                <td class="green">0.020191</td>
                <td>0.2155045</td>
              </tr>
              <tr>
                <td>13:03:53</td>
                <td class="red">0.020191</td>
                <td>0.2155045</td>
              </tr>
              <tr>
                <td>13:03:53</td>
                <td class="green">0.020191</td>
                <td>0.2155045</td>
              </tr>
              <tr>
                <td>13:03:53</td>
                <td class="red">0.020191</td>
                <td>0.2155045</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade" id="market-depth" role="tabpanel">
          <div class="depth-chart-container">
            <div class="depth-chart-inner">
              <div id="darkDepthChart"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div---->
  <!--div class="col-md-3">
    <div class="market-news mt15">
      <h2 class="heading">Market News</h2>
      <ul>
        <li><a href="#!">
            <strong>KCS Pay Fees Feature is Coming Soon</strong>
            To accelerate the ecosystem construction of KuCoin Share (KCS) and promote the implementation of the KCS
            application.
            <span>2019-12-04 20:22</span>
          </a></li>
        <li><a href="#!">
            <strong>KCS Pay Fees Feature is Coming Soon</strong>
            To accelerate the ecosystem construction of KuCoin Share (KCS) and promote the implementation of the KCS
            application.
            <span>2019-12-04 20:22</span>
          </a></li>
        <li><a href="#!">
            <strong>KCS Pay Fees Feature is Coming Soon</strong>
            To accelerate the ecosystem construction of KuCoin Share (KCS) and promote the implementation of the KCS
            application.
            <span>2019-12-04 20:22</span>
          </a></li>
        <li><a href="#!">
            <strong>KCS Pay Fees Feature is Coming Soon</strong>
            To accelerate the ecosystem construction of KuCoin Share (KCS) and promote the implementation of the KCS
            application.
            <span>2019-12-04 20:22</span>
          </a></li>
        <li><a href="#!">
            <strong>KCS Pay Fees Feature is Coming Soon</strong>
            To accelerate the ecosystem construction of KuCoin Share (KCS) and promote the implementation of the KCS
            application.
            <span>2019-12-04 20:22</span>
          </a></li>
      </ul>
    </div>
  </div--->
  <!--div class="col-md-9">
    <div class="market-history market-order mt15">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="pill" href="#open-orders" role="tab" aria-selected="true">Open
            Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#stop-orders" role="tab" aria-selected="false">Closed
            Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#order-history" role="tab" aria-selected="false">Order
            history</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#trade-history" role="tab" aria-selected="false">Balance</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="open-orders" role="tabpanel">
          <ul class="d-flex justify-content-between market-order-item">
            <li>Time</li>
            <li>All pairs</li>
            <li>All Types</li>
            <li>Buy/Sell</li>
            <li>Price</li>
            <li>Amount</li>
            <li>Executed</li>
            <li>Unexecuted</li>
          </ul>
          <span class="no-data">
            <i class="icon ion-md-document"></i>
            No data
          </span>
        </div>
        <div class="tab-pane fade" id="stop-orders" role="tabpanel">
          <ul class="d-flex justify-content-between market-order-item">
            <li>Time</li>
            <li>All pairs</li>
            <li>All Types</li>
            <li>Buy/Sell</li>
            <li>Price</li>
            <li>Amount</li>
            <li>Executed</li>
            <li>Unexecuted</li>
          </ul>
          <span class="no-data">
            <i class="icon ion-md-document"></i>
            No data
          </span>
        </div>
        <div class="tab-pane fade" id="order-history" role="tabpanel">
          <ul class="d-flex justify-content-between market-order-item">
            <li>Time</li>
            <li>All pairs</li>
            <li>All Types</li>
            <li>Buy/Sell</li>
            <li>Price</li>
            <li>Amount</li>
            <li>Executed</li>
            <li>Unexecuted</li>
          </ul>
          <span class="no-data">
            <i class="icon ion-md-document"></i>
            No data
          </span>
        </div>
        <div class="tab-pane fade" id="trade-history" role="tabpanel">
          <ul class="d-flex justify-content-between market-order-item">
            <li>Time</li>
            <li>All pairs</li>
            <li>All Types</li>
            <li>Buy/Sell</li>
            <li>Price</li>
            <li>Amount</li>
            <li>Executed</li>
            <li>Unexecuted</li>
          </ul>
          <span class="no-data">
            <i class="icon ion-md-document"></i>
            No data
          </span>
        </div>
      </div>
    </div>
  </div--->
</div>
</div>

<style>.tradingview-widget-copyright {font-size: 13px !important; line-height: 32px !important; text-align: center !important; vertical-align: middle !important; font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important; color: #9db2bd !important;} .tradingview-widget-copyright .blue-text {color: #2962FF !important;} .tradingview-widget-copyright a {text-decoration: none !important; color: #9db2bd !important;} .tradingview-widget-copyright a:visited {color: #9db2bd !important;} .tradingview-widget-copyright a:hover .blue-text {color: #1E53E5 !important;} .tradingview-widget-copyright a:active .blue-text {color: #1848CC !important;} .tradingview-widget-copyright a:visited .blue-text {color: #2962FF !important;}</style>
@endsection