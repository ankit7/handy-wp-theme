<?php ?>
<style>
  .compare-table {
    border-color: #2e2e2a;
  }

  .compare-table .empty-cell {
    border: none;
  }

  .compare-table thead tr {
    border-top: 0;
  }

  .compare-table thead th {
    border-top: 1px solid #2e2e2a;
    text-align: center;
  }

  .compare-table tbody th>p {
    margin-bottom: 0;
  }

  .compare-table tbody td {
    vertical-align: middle;
    text-align: center;
  }

  .table> :not(:last-child)> :last-child>* {
    border-bottom-color: rgb(33, 37, 41);
  }

  .table-bordered> :not(caption)>* {
    border-width: 1px 0;
  }

  .table> :not(caption)>*>* {
    padding: .5rem .5rem;
    background-color: var(--bs-table-bg);
    border-bottom-width: 1px;
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
  }

  .ratings {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.5rem;
    font-weight: 600;
    color: #2e2e2a;
    gap: 10px;
  }

  .ratings span {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 1px solid #4E5862;
  }

  .ratings span.active {
    background-color: #4E5862;
  }

  .table>thead {
    vertical-align: bottom;
  }

  .compare-table-mobile .ratings {
    gap: 5px;
  }

  .compare-table-mobile .ratings span {
    width: 10px;
    height: 10px;
  }

  .table-bordered td,
  .table-bordered th {
    border: 1px solid #212529;
  }
</style>
<section class="compare py-5">
  <div class="container">
    <h2 class="title bordered mb-4">Our sleeves</h2>
    <div class="table-responsive p-1 d-none d-sm-block">
      <table class="table table-bordered compare-table">
        <thead>
          <tr>
            <th scope="col" class="empty-cell"></th>
            <th scope="col">Firmness</th>
            <th scope="col">Flexibility</th>
            <th scope="col">Length</th>
            <th scope="col">Entrance diameter</th>
            <th scope="col">Longevity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">
              <p>
                <span class="fw-600 d-block">TrueGrip*</span>
                *comes with the Handy
              </p>
            </th>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </td>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
              </div>
            </td>
            <td>11-12 cm</td>
            <td>22-90mm</td>
            <td>20-40 usages</td>
          </tr>
          <tr>
            <th scope="row">
              <p>
                <span class="fw-600 d-block">Soft</span>
                Open Ended collection
              </p>
            </th>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </td>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
              </div>
            </td>
            <td>12-13 cm</td>
            <td>15-80mm</td>
            <td>20-40 usages</td>
          </tr>
          <tr>
            <th scope="row">
              <p>
                <span class="fw-600 d-block">Medium</span>
                Open Ended collection
              </p>
            </th>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
              </div>
            </td>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
              </div>
            </td>
            <td>12-13 cm</td>
            <td>13-60mm</td>
            <td>20-40 usages</td>
          </tr>
          <tr>
            <th scope="row">
              <p>
                <span class="fw-600 d-block"> Hard</span>
                Open Ended collection
              </p>
            </th>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
              </div>
            </td>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </td>
            <td>12-13 cm</td>
            <td>11-50mm</td>
            <td>20-40 usages</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive p-1 d-block d-sm-none">
      <table class="table table-bordered compare-table compare-table-mobile">
        <thead>
          <tr>
            <th scope="col">
              <p>
                <span class="fw-600 d-block"> TrueGrip*</span>
                *comes with the Handy
              </p>
            </th>
            <th scope="col">
              <p>
                <span class="fw-600 d-block"> Soft </span>
                Open Ended collection
              </p>
            </th>
            <th scope="col">
              <p>
                <span class="fw-600 d-block"> Medium </span>
                Open Ended collection
              </p>
            </th>
            <th scope="col">
              <p>
                <span class="fw-600 d-block">Hard</span>
                Open Ended collection
              </p>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="4" class="text-center">
              <span class="fw-600">Firmness</span>
            </td>
          </tr>
          <tr>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </td>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </td>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
              </div>
            </td>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="4" class="text-center">
              <span class="fw-600">Flexibility </span>
            </td>
          </tr>
          <tr>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
              </div>
            </td>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
              </div>
            </td>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
              </div>
            </td>
            <td>
              <div class="ratings">
                <span class="active"></span>
                <span class="active"></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="4" class="text-center">
              <span class="fw-600">Length </span>
            </td>
          </tr>
          <tr>
            <td>11-12 cm</td>
            <td>12-13 cm</td>
            <td>12-13 cm</td>
            <td>12-13 cm</td>
          </tr>
          <tr>
            <td colspan="4" class="text-center">
              <span class="fw-600">Entrance diameter </span>
            </td>
          </tr>
          <tr>
            <td>22-90mm</td>
            <td>15-70mm</td>
            <td>13-60mm</td>
            <td>11-50mm</td>
          </tr>
          <tr>
            <td colspan="4" class="text-center">
              <span class="fw-600">Longevity</span>
            </td>
          </tr>
          <tr>
            <td>20-40 usages</td>
            <td>20-40 usages</td>
            <td>20-40 usages</td>
            <td>20-40 usages</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>