class AddLogToUsers < ActiveRecord::Migration
  def change
    add_column :users, :reg_at, :timestamp
    add_column :users, :last_login_at, :timestamp
    add_column :users, :login_count, :int
    add_column :users, :login_ip, :string
  end
end
