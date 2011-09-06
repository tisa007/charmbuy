# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended to check this file into your version control system.

ActiveRecord::Schema.define(:version => 20110906153453) do

  create_table "docs", :force => true do |t|
    t.string   "title"
    t.text     "body"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "messages", :force => true do |t|
    t.text     "body"
    t.text     "reply"
    t.boolean  "is_visible"
    t.boolean  "is_readed"
    t.boolean  "is_replied"
    t.integer  "poster_id"
    t.integer  "replier_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "messages", ["poster_id"], :name => "index_messages_on_poster_id"
  add_index "messages", ["replier_id"], :name => "index_messages_on_replier_id"

  create_table "news", :force => true do |t|
    t.string   "title"
    t.text     "body"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "shops", :force => true do |t|
    t.string   "name"
    t.string   "icon"
    t.string   "link"
    t.string   "site"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "users", :force => true do |t|
    t.string   "name"
    t.string   "email"
    t.string   "password"
    t.string   "real_name"
    t.string   "address"
    t.string   "post_code"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

end
