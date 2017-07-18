<?php $this->load->view('public/cor_header');?>
    <link href="<?php echo base_url();?>asset/organisasi/orgchart.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url();?>asset/organisasi/orgchart.js"></script>
    <section class="container">
    <div class="center">
    <h2>Struktur Organisasi<br>
        RT002, RW037</h2>
    
</div>
<div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="row pembatas">
            <div id="tree-view">
                <div class="jOrgChart">

                    <table border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                        <tr class="node-cells">
                            <td colspan="4" class="node-cell">
                                <div id="root" class="node"><span><div class="content">Ketua RW</div><?php echo $RW->nama ?></span></div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                <div class="line down"></div>
                            </td>
                        </tr>
                        <tr class="node-cells">
                            <td colspan="4" class="node-cell">
                                <div id="root" class="node"><span><div class="content">Ketua RT</div><?php echo $RT->nama ?></span></div>

                            </td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                <div class="line down"></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="line left">&nbsp;</td>
                            <td class="line right top">&nbsp;</td>
                            <td class="line left top">&nbsp;</td>
                            <td class="line right">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="node-container">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                    <tr class="node-cells">
                                        <td colspan="6" class="node-cell">
                                            <div></div>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td class="line left">&nbsp;</td>
                                        <td class="line right top">&nbsp;</td>
                                        <td class="line top">&nbsp;</td>
                                        <td class="line top">&nbsp;</td>
                                        <td class="line left top">&nbsp;</td>
                                        <td class="line right">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="node-container">
                                            <table border="0" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                <tr class="node-cells">
                                                    <td colspan="2" class="node-cell">
                                                        <div id="node8" class="node"><span><div class="content"> Sekertaris</div><?php echo $sekertaris->nama ?></span></div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td colspan="2" class="node-container">
                                            <table border="0" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                <tr class="node-cells">
                                                    <td colspan="2" class="node-cell">
                                                        <div ><span><div ></div></span></div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td colspan="2" class="node-container">
                                            <table border="0" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                <tr class="node-cells">
                                                    <td colspan="2" class="node-cell">
                                                        <div id="node10" class="node"><span>

																	<div class="content">Bendahara</div>
																	</span><?php echo $bendahara->nama?></div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
							
                            <td colspan="2" class="node-container">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                    <tr class="node-cells">
                                        <td colspan="2" class="node-cell">
                                            <div id="node11" class="node vertical"><span>
													<div><br/></div>
													<div class="content">Seksi-Seksi</div></span></div>
                                            <div class="multi-tree">
                                                <ul>
                                                    <li><span><div id="node12" class="content">Keamanan <br/><?php echo $keamanan->nama ?></div></span></li>
                                                    <li><span><div id="node13" class="content">Kerohanian <br/><?php echo $kerohanian->nama ?></div></span></li>
                                                    <li><span><div id="node14" class="content">Humas <br/><?php echo $humas->nama ?></div></span></li>
                                                    <li><span><div id="node15" class="content">Koperasi <br/><?php echo $koperasi->nama ?></div></span></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
							
							<td colspan="2" class="node-container">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
									<tr class="node-cells">
                                        <td>
                                            <div> &nbsp </div>
                                       </td>
                                    </tr>
									<tr class="node-cells">
                                        <td>
                                            <div> &nbsp </div>
                                       </td>
                                    </tr>
									<tr class="node-cells">
                                        <td>
                                            <div> &nbsp </div>
                                       </td>
                                    </tr>
									<tr class="node-cells">
                                        <td>
                                            <div> &nbsp </div>
                                       </td>
                                    </tr>
									<tr class="node-cells">
                                        <td>
                                            <div> &nbsp </div>
                                       </td>
                                    </tr>
									
									<tr class="node-cells">
                                        <td>
                                            <div> &nbsp </div>
                                       </td>
                                    </tr>
                                    <tr class="node-cells">
                                        <td class="line top">
                                            <div  style="width: 30px;" > &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                       </td>
                                    </tr>
									
									<tr class="node-cells">
                                        <td  >
                                            <div>&nbsp </div>
										</td>
                                    </tr>
									
                                    </tbody>
                                </table>
							
							
							
							
							
							  <td colspan="2" class="node-container">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                    <tr class="node-cells">
                                        <td colspan="2" >
											<div>&nbsp;</div>
                                            <div>&nbsp;</div>
											<div>&nbsp;</div>
											<div>&nbsp;</div>
											<div>&nbsp;</div>
											
											<div id="node11" class="node vertical"><span>
													<div class="content">Petugas<br> Keamanan</div></span></div>
													
                                            <div class="multi-tree">
                                                <ul>    
																									
                                                    <li><span>
														<div id="node13" class="content">Petugas 1<br/><?php echo $keamanan1->nama ?></div>
													</span></li>
                                                    <li><span>
														<div id="node14" class="content">Petugas 2 <br/><?php echo $keamanan2->nama ?></div>
													</span></li>
                                                   
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
								
                            </td>
						</tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    // create a tree
                    $("#tree-data").jOrgChart({
                        chartElement: $("#tree-view"),
                        nodeClicked: nodeClicked
                    });

                    // lighting a node in the selection
                    function nodeClicked(node, type) {
                        node = node || $(this);
                        $('.jOrgChart .selected').removeClass('selected');
                        node.addClass('selected');
                    }
                });

            </script>

        </div>
        <?php for($i=0;$i<=2;$i++){?>
        <div class="row"><p></p></div><?php } ?>
    </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table  table-bordered " id="tables">
                    <thead class="bg-primary">
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Telepon</th>
                        <th>alamat</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($organisasi as $o){ ?>
                    <tr>
                        <td><?php echo $o->nama?></td>
                        <td><?php echo $o->jabatan?></td>
                        <td><?php echo $o->telepon?></td>
                        <td><?php echo $o->alamat?></td>
                        <td><?php echo $o->email?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
</section>
<?php $this->load->view('public/cor_footer');?>