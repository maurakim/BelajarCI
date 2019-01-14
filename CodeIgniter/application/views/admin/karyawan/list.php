<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>id_karyawan</th>
										<th>nama_karyawan</th>
										<th>alamat_karyawan</th>
										<th>no_telp</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($karyawan as $karyawan): ?>
									<tr>
										<td width="150">
											<?php echo $karyawan->id_karyawan ?>
										</td>
										<td>
											<?php echo $karyawan->nama_karyawan ?>
										</td>
                                        <td>
											<?php echo $karyawan->alamat_karyawan ?>
										</td>
                                        <td>
											<?php echo $karyawan->no_telp ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/karyawan/edit/'.$karyawan->id_karyawan) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/karyawan/delete/'.$karyawan->id_karyawan) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>