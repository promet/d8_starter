describe('Homepage Logged in', function() {
  it('logs out via ui', function(){
    cy.login(Cypress.env('cyAdminUser'), Cypress.env('cyAdminPassword'));
    cy.server();
    cy.visit('/');
    cy.get('#block-starter-account-menu a')
      .contains('Log out')
      .click({force: true}); // This is a workaround due to the admin bar getting in the way. Not a great approach.
  });
});
describe('Homepage', function() {
  it('visits homepage', function() {
    cy.visit('/');
    cy.get('#block-starter-branding').contains('Promet Drupal Starter');
  });
});
