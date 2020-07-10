<template>
  <div>
    <div class="row">
      <div class="col s12 m6 l4">
        <div class="card padding-4 animate fadeLeft">
          <div class="col s5 m5">
            <h5 class="mb-0">1885111</h5>
            <p class="no-margin">New</p>
            <p class="mb-0 pt-8">1,12,900</p>
          </div>
          <div class="col s7 m7 right-align">
            <i
              class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text"
            >perm_identity</i>
            <p class="mb-0">Total Clients</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card padding-4 animate fadeLeft">
          <div class="col s5 m5">
            <h5 class="mb-0">1885</h5>
            <p class="no-margin">New</p>
            <p class="mb-0 pt-8">1,12,900</p>
          </div>
          <div class="col s7 m7 right-align">
            <i
              class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text"
            >perm_identity</i>
            <p class="mb-0">Total Clients</p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card padding-4 animate fadeLeft">
          <div class="col s5 m5">
            <h5 class="mb-0">1885</h5>
            <p class="no-margin">New</p>
            <p class="mb-0 pt-8">1,12,900</p>
          </div>
          <div class="col s7 m7 right-align">
            <i
              class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text"
            >perm_identity</i>
            <p class="mb-0">Total Clients</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col s12 l8">
        <div class="card subscriber-list-card animate fadeRight">
          <div class="card-content pb-1">
            <h4 class="card-title mb-0">
              Subscriber List
              <i class="material-icons float-right">more_vert</i>
            </h4>
          </div>
          <table class="subscription-table responsive-table highlight">
            <thead>
              <tr>
                <th class="pl-2">Name</th>
                <th>Company</th>
                <th>Start Date</th>
                <th>Status</th>
                <th>Amount</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="pl-2">Michael Austin</td>
                <td>ABC Fintech LTD.</td>
                <td>Jan 1,2019</td>
                <td>
                  <span class="badge pink lighten-5 pink-text text-accent-2">Close</span>
                </td>
                <td>$ 1000.00</td>
                <td class="center-align">
                  <a href="#">
                    <i class="material-icons pink-text">clear</i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="pl-2">Aldin Rakić</td>
                <td>ACME Pvt LTD.</td>
                <td>Jan 10,2019</td>
                <td>
                  <span class="badge green lighten-5 green-text text-accent-4">Open</span>
                </td>
                <td>$ 3000.00</td>
                <td class="center-align">
                  <a href="#">
                    <i class="material-icons pink-text">clear</i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="pl-2">İris Yılmaz</td>
                <td>Collboy Tech LTD.</td>
                <td>Jan 12,2019</td>
                <td>
                  <span class="badge green lighten-5 green-text text-accent-4">Open</span>
                </td>
                <td>$ 2000.00</td>
                <td class="center-align">
                  <a href="#">
                    <i class="material-icons pink-text">clear</i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="pl-2">Lidia Livescu</td>
                <td>My Fintech LTD.</td>
                <td>Jan 14,2019</td>
                <td>
                  <span class="badge pink lighten-5 pink-text text-accent-2">Close</span>
                </td>
                <td>$ 1100.00</td>
                <td class="center-align">
                  <a href="#">
                    <i class="material-icons pink-text">clear</i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col s12 l4">
        <!-- Recent Buyers -->
        <div class="card recent-buyers-card animate fadeUp">
          <div class="card-content">
            <h4 class="card-title mb-0">
              Recent Buyers
              <i class="material-icons float-right">more_vert</i>
            </h4>
            <p class="medium-small pt-2">Today</p>
            <ul class="collection mb-0">
              <li class="collection-item avatar">
                <img src="images/avatar/avatar-7.png" alt class="circle" />
                <p class="font-weight-600">John Doe</p>
                <p class="medium-small">18, January 2019</p>
                <a href="#!" class="secondary-content">
                  <i class="material-icons">star_border</i>
                </a>
              </li>
              <li class="collection-item avatar">
                <img src="images/avatar/avatar-3.png" alt class="circle" />
                <p class="font-weight-600">Adam Garza</p>
                <p class="medium-small">20, January 2019</p>
                <a href="#!" class="secondary-content">
                  <i class="material-icons">star_border</i>
                </a>
              </li>
              <li class="collection-item avatar">
                <img src="images/avatar/avatar-5.png" alt class="circle" />
                <p class="font-weight-600">Jennifer Rice</p>
                <p class="medium-small">25, January 2019</p>
                <a href="#!" class="secondary-content">
                  <i class="material-icons">star_border</i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <br />
    <br />
    <br />
  </div>
</template>


<script>
export default {
  data: () => {
    return {
      bURL: window.bURL
    };
  }
};
</script>
<style lang="stylus" scoped></style>
