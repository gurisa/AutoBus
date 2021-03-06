
          <div class="cell auto-size padding20 bg-white" id="cell-content">

            <h1 class="text-light">Manajemen Transaksi <span class="mif-dollar2 place-right"></span></h1>
            <hr class="thin bg-black">
            <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
              <thead>
                <tr>
                  <td class="sortable-column sort-asc" style="width: 100px">#ID</td>
                  <td class="sortable-column">Tanggal</td>
                  <td class="sortable-column">Detil</td>
                  <?php if ($user->authority_id == 'ROOT') { ?>
                  <td width="200px">Operasi</td>
                  <?php } ?>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($transaction as $key => $value) { ?>
                <tr>
                  <td><?php echo $value->transaction_id; ?></td>
                  <td><?php echo $value->transaction_date; ?></td>
                  <td>
                    <ul type="square">
                    <?php foreach ($this->transaction->get_transaction_detil($value->transaction_id) as $key2 => $value2) { ?>
                      <li><?php echo $this->ticket->get_ticket_id($value2->ticket_id)[0]->ticket_name; ?></li>
                    <?php } ?>
                    </ul>
                  </td>
                  <?php if ($user->authority_id == 'ROOT') { ?>
                  <td>
                    <a href="<?php echo base_url('/dashboard/delete/transaction/' . $value->transaction_id); ?>" class="button bg-darkRed fg-white">Hapus</a>
                  </td>
                  <?php } ?>
                </tr>
                <?php } ?>
              </tbody>
            </table>

            <hr class="thin bg-grayLighter">
          </div>

        </div>
      </div>
    </div>

  </div>
