class CreateMessages < ActiveRecord::Migration
  def change
    create_table :messages do |t|
      t.text :body
      t.text :reply
      t.boolean :is_visible
      t.boolean :is_readed
      t.boolean :is_replied
      t.references :poster
      t.references :replier

      t.timestamps
    end
    add_index :messages, :poster_id
    add_index :messages, :replier_id
  end
end
