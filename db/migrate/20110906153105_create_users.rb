class CreateUsers < ActiveRecord::Migration
  def change
    create_table :users do |t|
      t.string :name
      t.string :email
      t.string :password
      t.string :real_name
      t.string :address
      t.string :post_code

      t.timestamps
    end
  end
end
